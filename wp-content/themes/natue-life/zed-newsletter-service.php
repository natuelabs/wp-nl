<?php

class ZedNewsletterService
{
    /** @var array  */
    protected $config;

    /** @var string $brand */
    protected $brand = 'natuelife';

    /**
     * Zed constructor.
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->config = $config;
    }

    /**
     * @return string
     */
    protected function getBrand()
    {
        return $this->brand;
    }

    protected function getServiceURI()
    {
        if (! array_key_exists('apiURI', $this->config)) {
            throw new \Exception('API URI is missing');
        }
        $uri = array_key_exists('ssl', $this->config) && $this->config['ssl'] ? 'https://' : 'http://';

        return $uri . $this->config['apiURI'] . '/newsletter/api/subscribe';
    }

    /**
     * @param $email
     * @param $name
     * @return bool
     */
    public function subscribe($email, $name)
    {
        $response = $this->request(
            $this->getServiceURI(),
            [
                'NewsletterForm[email]' => $email,
                'NewsletterForm[name]' => $name,
                'NewsletterForm[brand]' => $this->getBrand()
            ]
        );

        if (is_array($response) && in_array('success', $response) && $response['success']){
            return true;
        }

        return false;
    }

    /**
     * @param string $url
     * @param array $params
     * @return array
     */
    protected function request($url, $params = [])
    {
        $curl = curl_init($url);

        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $params);
        curl_setopt($curl, CURLOPT_HTTPHEADER, ['Accept: application/json']);

        return json_decode(curl_exec($curl), true);
    }
}
