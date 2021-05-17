<?php
/**
 * @author Sergej Jevsejev <sergej.jevsejev@project-a.com>
 */
class Splio
{
    /** @var string $serviceUrl */
    protected $serviceUrl = 's3s.fr/api/rest/1/';
    protected $curl;
    /** @var string $universe */
    protected $universe;
    /** @var string $pass */
    protected $pass;
    /** @var int $listId */
    protected $listId = 0;
    public function __construct($universe, $pass)
    {
        $this->universe = $universe;
        $this->pass = $pass;
    }
    /**
     * @param integer $listId
     * @return Nu3_Newsletter_Model_Provider_Api_Splio
     */
    public function setListId($listId)
    {
        $this->listId = $listId;
        return $this;
    }
    /**
     * @return int
     */
    public function getListId()
    {
        return $this->listId;
    }
    /**
     * Returns request url base
     *
     * @param string $serviceUrl
     */
    protected function getServiceUrl()
    {
        return "https://".$this->universe.":".$this->pass."@".$this->serviceUrl;
    }
    /**
     * Returns all lists defined for your universe.
     *
     * @return array
     */
    public function getAllLists()
    {
        return $this->request("list");
    }
    /*
     * Returns custom fields relevant for the Customer universe.￼￼￼￼￼￼￼
     */
    public function getCustomFields()
    {
        return $this->request("fields");
    }
    /**
     * @param string $email
     * @return array
     */
    public function isSubscribed($email)
    {
        $response = $this->request("contact/".$email);
        if(!is_array($response) || !$response['email'] || !$response['lists']){
            return false;
        }
        foreach($response['lists'] as $list){
            if($list['id'] == $this->getListId()){
                return true;
            }
        }
        return false;
    }
    public function subscribe($email)
    {
        $response = $this->request('contact', 'POST',
            [
                'email' => $email,
                'lists' => [
                    [ 'id' => $this->getListId()]
                ]
            ]
        );
        if (is_array($response) && isset($response['code']) && $response['code'] == 200){
            return true;
        }
        if(is_array($response) && isset($response['code']) && $response['code'] == 400
                && $response['description'] == 'email already in db'
        ){
            $response = $this->request( "contact/".$email, 'PUT', [
                    'lists' =>
                        [
                            [
                                'id' => $this->getListId(),
                            ]
                        ]
                ]
            );
            if (is_array($response) && isset($response['code']) && $response['code'] == 200){
                return true;
            }
        }
        return false;
    }
    public function unsubscribe($email)
    {
        $response = $this->request( "contact/".$email, 'PUT', [
                'lists' =>
                [
                    [
                        'id' => $this->getListId(),
                        'action' => 'unsubscribe'
                    ]
                ]
            ]
        );
        if(is_array($response) && isset($response['code']) && $response['code'] == 200){
            return true;
        }
        return false;
    }
    /**
     * request function
     * GET / POST / PUT
     *
     * @param $relativeUrl
     * @return mixed
     */
    protected function request($relativeUrl, $method = 'GET', $params = [])
    {
        $curl = curl_init($this->getServiceUrl().$relativeUrl);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true); // just for the example.
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array("Expect:")); //can solve problems with curl
        switch($method){
            case 'POST':
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($params));
            break;
            case 'PUT':
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
                curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($params));
            break;
        }
        $curl_response = curl_exec($curl);
        curl_close($curl);
        return json_decode($curl_response, true);
    }
}
