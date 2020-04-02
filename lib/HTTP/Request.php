<?php

namespace Demyashev\Bitrix\HTTP;

class Request {

    private $_url = '';

    private $_data = [];

    public function setUrl(string $url) : self
    {
        $this->_url = $url;

        return $this;
    }

    public function setData(array $data) : self
    {
        $this->_data = $data;

        return $this;
    }

    public function exec()
    {
        $data = http_build_query($this->_data);

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_POST => 1,
            CURLOPT_HEADER => 0,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $this->_url,
            CURLOPT_POSTFIELDS => $data,
        ));

        $result = curl_exec($curl);
        $response = json_decode($result);

        curl_close($curl);

        if (isset($response->error)) {
            throw new \Exception($response->error_description);
        }

        return $response->result;
    }
}