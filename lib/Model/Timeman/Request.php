<?php

namespace Demyashev\Bitrix\Model\Timeman;

use Demyashev\Bitrix\Model;

class Request extends Model {

    private $_user_id = 0;

    public function setUserId(int $userId) : self
    {
        $this->_user_id = $userId;

        return $this;
    }

    public function getUserId() : int
    {
        return $this->_user_id;
    }
}