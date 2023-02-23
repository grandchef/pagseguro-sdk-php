<?php

namespace PagSeguro\Domains\Requests\Shipping;

trait AddressRequired
{
    private $addressRequired;

    public function getAddressRequired()
    {
        return current($this->addressRequired);
    }

    public function setAddressRequired()
    {
        $this->addressRequired = new \PagSeguro\Resources\Factory\Shipping\AddressRequired($this->shipping);

        return $this->addressRequired;
    }
}
