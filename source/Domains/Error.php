<?php

namespace PagSeguro\Domains;

/** Class Error
 */
class Error
{
    private $code;

    private $message;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param  string  $code
     * @return Error
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param  string  $message
     * @return Error
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }
}
