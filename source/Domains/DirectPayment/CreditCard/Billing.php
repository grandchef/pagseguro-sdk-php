<?php

namespace PagSeguro\Domains\DirectPayment\CreditCard;

class Billing
{
    /***
     * Billing address
     * @see Address
     */
    private $address;

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return $this
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }
}
