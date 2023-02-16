<?php

namespace PagSeguro\Domains\Responses;

/** Class PaymentMethod
 * @package PagSeguro\Domains
 */
class PaymentMethod
{
    /**
     * @var
     */
    private $code;
    /**
     * @var
     */
    private $type;

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     * @return PaymentMethod
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
     * @param mixed $type
     * @return PaymentMethod
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
}
