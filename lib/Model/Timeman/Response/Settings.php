<?php

namespace Demyashev\Bitrix\Model\Timeman\Response;

use Demyashev\Bitrix\Model\Timeman\Response;

class Settings extends Response {
    private $_admin = false;

    private $_uf_timeman = false;

    private $_uf_tm_free = false;

    private $_uf_tm_max_start = '';

    private $_uf_tm_min_finish = '';

    private $_uf_tm_min_duration = '';

    private $_uf_tm_allowed_delta = '';

    public function setAdmin(bool $admin): self
    {
        $this->_admin = $admin;

        return $this;
    }

    public function getAdmin(): bool
    {
        return $this->_admin;
    }

    public function setUfTimeman(bool $ufTimeman) : self
    {
        $this->_uf_timeman = $ufTimeman;

        return $this;
    }

    public function getUfTimeman() : bool
    {
        return $this->_uf_timeman;
    }

    public function setUfTmFree(bool $ufTmFree) : self
    {
        $this->_uf_tm_free = $ufTmFree;

        return $this;
    }

    public function getUfTmFree() : bool
    {
        return $this->_uf_tm_free;
    }

    public function setUfTmMaxStart(string $ufTmMaxStart) : self
    {
        $this->_uf_tm_max_start = $ufTmMaxStart;

        return $this;
    }

    public function getUfTmMaxStart() : string
    {
        return $this->_uf_tm_max_start;
    }

    public function setUfTmMinFinish(string $ufTmMinFinish) : self
    {
        $this->_uf_tm_min_finish = $ufTmMinFinish;

        return $this;
    }

    public function getUfTmMinFinish() : string
    {
        return $this->_uf_tm_min_finish;
    }

    public function setUfTmMinDuration(string $ufTmMinDuration) : self
    {
        $this->_uf_tm_min_duration = $ufTmMinDuration;

        return $this;
    }

    public function getUfTmMinDuration() : string
    {
        return $this->_uf_tm_min_duration;
    }

    public function setUfTmAllowedDelta(string $ufTmAllowedDelta) : self
    {
        $this->_uf_tm_allowed_delta = $ufTmAllowedDelta;

        return $this;
    }

    public function getUfTmAllowedDelta() : string
    {
        return $this->_uf_tm_allowed_delta;
    }
}