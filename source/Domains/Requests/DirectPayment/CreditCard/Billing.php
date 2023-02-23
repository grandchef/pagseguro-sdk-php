<?php

namespace PagSeguro\Domains\Requests\DirectPayment\CreditCard;

use PagSeguro\Helpers\InitializeObject;

trait Billing
{
    private $billing;

    /**
     * @return \PagSeguro\Domains\Requests\Adapter\DirectPayment\Billing
     */
    public function setBilling()
    {
        $this->billing = InitializeObject::initialize(
            $this->billing,
            '\PagSeguro\Domains\DirectPayment\CreditCard\Billing'
        );

        return new \PagSeguro\Domains\Requests\Adapter\DirectPayment\Billing($this->billing);
    }

    /**
     * @return billing
     */
    public function getBilling()
    {
        return $this->billing;
    }
}
