<?php

namespace PagSeguro\Domains\Requests\Shipping;

trait Cost
{
    private $cost;

    public function getCost()
    {
        return current($this->cost);
    }

    public function setCost()
    {
        $this->cost = new \PagSeguro\Resources\Factory\Shipping\Cost($this->shipping);
        return $this->cost;
    }
}
