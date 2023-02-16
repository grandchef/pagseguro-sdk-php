<?php

namespace PagSeguro\Domains\Requests;

trait Shipping
{
    private $shipping;

    public function __construct()
    {
        $this->shipping = new \PagSeguro\Domains\Shipping();
    }

    public function setShipping()
    {
        return new \PagSeguro\Domains\Requests\Adapter\Shipping($this->shipping);
    }

    public function getShipping()
    {
        return $this->shipping;
    }
}
