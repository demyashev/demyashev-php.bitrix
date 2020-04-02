<?php

namespace Demyashev\Bitrix;

class Module {

    protected $_url = '';

    public function __construct(string $url)
    {
        $this->setUrl($url);
    }

    private function setUrl(string $url) : self
    {
        $this->_url = $url;

        return $this;
    }

    protected function getUrl() : string
    {
        return $this->_url;
    }
}