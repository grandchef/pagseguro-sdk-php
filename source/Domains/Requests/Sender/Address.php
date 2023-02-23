<?php

namespace PagSeguro\Domains\Requests\Sender;

trait Address
{
    private $address;

    public function getAddress()
    {
        return current($this->address);
    }

    public function setAddress()
    {
        $this->address = new \PagSeguro\Resources\Factory\Sender\Address($this->sender);

        return $this->address;
    }
}
