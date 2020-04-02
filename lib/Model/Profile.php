<?php

namespace Demyashev\Bitrix\Model;

use Demyashev\Bitrix\Model;

class Profile extends Model {

    public function __construct(\stdClass $object)
    {
        parent::__construct($object);
    }

    private $_id = 0;

    private $_admin = false;

    private $_name = '';

    private $_last_name = '';

    private $_personal_gender = '';

    private $_personal_photo = '';

    private $_time_zone = '';

    private $_time_zone_offset = 0;

    public function setId(int $id) : self
    {
        $this->_id = $id;

        return $this;
    }

    public function getId() : int
    {
        return $this->_id;
    }

    public function setAdmin(bool $admin) : self
    {
        $this->_admin = $admin;

        return $this;
    }

    public function getAdmin() : bool
    {
        return $this->_admin;
    }

    public function setName(string $name) : self
    {
        $this->_name = $name;

        return $this;
    }

    public function getName() : string
    {
        return $this->_name;
    }

    public function setLastName(string $lastName) : self
    {
        $this->_last_name = $lastName;

        return $this;
    }

    public function getLastName() : string
    {
        return $this->_last_name;
    }

    public function setPersonalGender(string $personalGender) : self
    {
        $this->_personal_gender = $personalGender;

        return $this;
    }

    public function getPersonalGender() : string
    {
        return $this->_personal_gender;
    }

    public function setPersonalPhoto(string $personalPhoto) : self
    {
        $this->_personal_photo = $personalPhoto;

        return $this;
    }

    public function getPersonalPhoto() : string
    {
        return $this->_personal_photo;
    }

    public function setTimeZone(string $timeZone) : self
    {
        $this->_time_zone = $timeZone;

        return $this;
    }

    public function getTimeZone() : string
    {
        return $this->_time_zone;
    }

    public function setTimeZoneOffset(int $timeZoneOffset) : self
    {
        $this->_time_zone_offset = $timeZoneOffset;

        return $this;
    }

    public function getTimeZoneOffset() : int
    {
        return $this->_time_zone_offset;
    }
}