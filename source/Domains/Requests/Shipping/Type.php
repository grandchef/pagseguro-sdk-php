<?php

namespace PagSeguro\Domains\Requests\Shipping;

trait Type
{
    private $type;

    public function getType()
    {
        return current($this->type);
    }

    public function setType()
    {
        $this->type = new \PagSeguro\Resources\Factory\Shipping\Type($this->shipping);
        return $this->type;
    }
}
