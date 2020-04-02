<?php

namespace Demyashev\Bitrix\Module;

use Demyashev\Bitrix\HTTP\Request;
use Demyashev\Bitrix\Model\Profile as ModelProfile;
use Demyashev\Bitrix\Module;

class Profile extends Module {

    public function profile(array $data = [])
    {
        $http = new Request();

        $response =
            $http
                ->setUrl($this->getUrl() . 'profile')
                ->setData($data)
                ->exec();

        return new ModelProfile($response);
    }
}