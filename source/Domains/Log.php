<?php

namespace PagSeguro\Domains;

class Log
{
    private $active;

    private $location;

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @return $this
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @return $this
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }
}
