<?php

namespace PagSeguro\Domains\Requests\DirectPayment\CreditCard\Billing;

trait Address
{

    private $address;

    public function getAddress()
    {
        return current($this->address);
    }

    public function setAddress()
    {
        $this->address =
            new \PagSeguro\Resources\Factory\Request\DirectPayment\CreditCard\Billing\Address($this->billing);
        return $this->address;
    }
}
