<?php

namespace PagSeguro\Domains\Requests\DirectPayment;

use PagSeguro\Helpers\InitializeObject;

trait Sender
{
    private $sender;

    public function setSender()
    {
        $this->sender =  InitializeObject::initialize($this->sender, '\PagSeguro\Domains\DirectPayment\Sender');
        return new \PagSeguro\Domains\Requests\Adapter\DirectPayment\Sender($this->sender);
    }

    public function getSender()
    {
        return $this->sender;
    }
}
