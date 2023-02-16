<?php

namespace PagSeguro\Domains\Requests\Sender;

trait Phone
{

    private $phone;

    public function getPhone()
    {
        return current($this->phone);
    }

    public function setPhone()
    {
        $this->phone = new \PagSeguro\Resources\Factory\Sender\Phone($this->sender);
        return $this->phone;
    }
}
