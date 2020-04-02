<?php

namespace Demyashev\Bitrix;

use Demyashev\Bitrix\Module\Profile;

class Core {

    private $_protocol = 'https';

    private $_project = '';

    private $_domain = 'bitrix24.ru';

    private $_user_id = 0;

    private $_token = '';

    public function __construct(string $restURI)
    {
        $this->parseRestURI($restURI);
    }

    public function getModules() : array
    {
        return [
            'profile',
            'timeman'
        ];
    }

    public function getModule(string $moduleName)
    {
        $moduleName = strtolower($moduleName);

        if (!in_array($moduleName, $this->getModules())) {
            throw new \Exception('Module not exist');
        }

        $classNameWithNamespace = "\\Demyashev\\Bitrix\\Module\\" . ucfirst($moduleName);
        $restURI = "{$this->getProtocol()}://{$this->getProject()}.{$this->getDomain()}/rest/{$this->getUserId()}/{$this->getToken()}/";

        return new $classNameWithNamespace($restURI);
    }

    private function parseRestURI(string $restURI)
    {
        $pattern = "(https?):\/\/([a-z]+)\.bitrix24\.ru\/rest\/(\d+)\/([a-z0-9]+)\/";

        preg_match_all("/{$pattern}/", $restURI, $matches);

        for ($i = 0; $i < 5; $i++) {
            if (empty($matches[$i])) {
                throw new \Exception('URL is not valid');
            }
        }

        $this->setProtocol($matches[1][0]);
        $this->setProject($matches[2][0]);
        $this->setUserId((int) $matches[3][0]);
        $this->setToken($matches[4][0]);
    }

    private function setProtocol(string $protocol) : self
    {
        $this->_protocol = $protocol;

        return $this;
    }

    protected function getProtocol() : string
    {
        return $this->_protocol;
    }

    private function setProject(string $project) : self
    {
        $this->_project = $project;

        return $this;
    }

    protected function getProject() : string
    {
        return $this->_project;
    }

    protected function getDomain() : string
    {
        return $this->_domain;
    }

    private function setUserId(int $userId) : self
    {
        $this->_user_id = $userId;

        return $this;
    }

    public function getUserId() : int
    {
        return $this->_user_id;
    }

    private function setToken(string $token) : self
    {
        $this->_token = $token;

        return $this;
    }

    protected function getToken() : string
    {
        return $this->_token;
    }
}