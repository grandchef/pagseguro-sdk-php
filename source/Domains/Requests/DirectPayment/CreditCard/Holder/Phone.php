<?php

namespace PagSeguro\Domains\Requests\DirectPayment\CreditCard\Holder;

trait Phone
{

    private $phone;

    public function getPhone()
    {
        return current($this->phone);
    }

    public function setPhone()
    {
        $this->phone = new \PagSeguro\Resources\Factory\Request\DirectPayment\CreditCard\Holder\Phone($this->holder);
        return $this->phone;
    }
}
