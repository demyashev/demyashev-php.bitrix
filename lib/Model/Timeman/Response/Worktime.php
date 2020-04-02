<?php

namespace Demyashev\Bitrix\Model\Timeman\Response;

use Demyashev\Bitrix\Model\Timeman\Response;

class Worktime extends Response {
    private $_status = '';

    private $_time_start = '';

    private $_time_finish = '';

    private $_duration = '';

    private $_time_leaks = '';

    private $_active = false;

    private $_ip_open = '';

    private $_ip_close = '';

    private $_lat_open = 0;

    private $_lon_open = 0;

    private $_lat_close = 0;

    private $_lon_close = 0;

    private $_tz_offset = 0;

    public function setStatus(string $status) : self
    {
        $this->_status = $status;

        return $this;
    }

    public function getStatus() : string
    {
        return $this->_status;
    }

    public function setTimeStart(string $timeStart) : self
    {
        $this->_time_start = $timeStart;

        return $this;
    }

    public function getTimeStart() : string
    {
        return $this->_time_start;
    }

    public function setTimeFinish(string $timeFinish) : self
    {
        $this->_time_finish = $timeFinish;

        return $this;
    }

    public function getTimeFinish() : string
    {
        return $this->_time_finish;
    }

    public function setDuration(string $duration) : self
    {
        $this->_duration = $duration;

        return $this;
    }

    public function getDuration() : string
    {
        return $this->_duration;
    }

    public function setTimeLeaks(string $timeLeaks) : self
    {
        $this->_time_leaks = $timeLeaks;

        return $this;
    }

    public function getTimeLeaks() : string
    {
        return $this->_time_leaks;
    }

    public function setActive(bool $active) : self
    {
        $this->_active = $active;

        return $this;
    }

    public function getActive() : bool
    {
        return $this->_active;
    }

    public function setIpOpen(string $ipOpen) : self
    {
        $this->_ip_open = $ipOpen;

        return $this;
    }

    public function getIpOpen() : string
    {
        return $this->_ip_open;
    }

    public function setIpClose(string $ipClose) : self
    {
        $this->_ip_close = $ipClose;

        return $this;
    }

    public function getIpClose() : string
    {
        return $this->_ip_close;
    }

    public function setLatOpen(int $latOpen) : self
    {
        $this->_lat_open = $latOpen;

        return $this;
    }

    public function getLatOpen() : int
    {
        return $this->_lat_open;
    }

    public function setLonOpen(int $lonOpen) : self
    {
        $this->_lon_open = $lonOpen;

        return $this;
    }

    public function getLonOpen() : int
    {
        return $this->_lon_open;
    }

    public function setLatClose(int $latClose) : self
    {
        $this->_lat_close = $latClose;

        return $this;
    }

    public function getLatClose() : int
    {
        return $this->_lat_close;
    }

    public function setLonClose(int $lonClose) : self
    {
        $this->_lon_close = $lonClose;

        return $this;
    }

    public function getLonClose() : int
    {
        return $this->_lon_close;
    }

    public function setTzOffset(int $tzOffset) : self
    {
        $this->_tz_offset = $tzOffset;

        return $this;
    }

    public function getTzOffset() : int
    {
        return $this->_tz_offset;
    }
}