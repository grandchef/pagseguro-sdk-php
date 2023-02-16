<?php

namespace PagSeguro\Domains\Requests\Adapter\DirectPayment;

use PagSeguro\Domains\Requests\DirectPayment\CreditCard\Billing\Address;

class Billing
{
    use Address;

    private $billing;

    public function __construct($billing)
    {
        $this->billing = $billing;
    }
}
