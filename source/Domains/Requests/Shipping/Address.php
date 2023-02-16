<?php

namespace PagSeguro\Domains\Requests\Shipping;

trait Address
{

    private $address;

    public function getAddress()
    {
        return current($this->address);
    }

    public function setAddress()
    {
        $this->address = new \PagSeguro\Resources\Factory\Shipping\Address($this->shipping);
        return $this->address;
    }
}
