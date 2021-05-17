<?php

class Mailman
{

    protected function getServiceURI()
    {
        return "https://m7fipcnwxg.execute-api.us-east-1.amazonaws.com/live/email";
    }

    /**
     * @param $email
     * @param $name
     * @return bool
     */
    public function subscribe($email, $name)
    {
        return $this->request(
            $this->getServiceURI(),
            [
                'email' => $email . ":natuelife",
                'name' => $name
            ]
        );
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
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($params));
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
            "Content-Type: application/json",
            "Accept: application/json"
        ]);

        curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return false;
        }

        return true;
    }
}
