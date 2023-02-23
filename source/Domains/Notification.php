<?php

namespace PagSeguro\Domains;

/** Class Notification
 */
class Notification
{
    private $code;

    private $type;

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}
