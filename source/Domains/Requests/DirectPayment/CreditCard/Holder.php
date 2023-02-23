<?php

namespace PagSeguro\Domains\Requests\DirectPayment\CreditCard;

use PagSeguro\Helpers\InitializeObject;

/** Class Sender
 */
trait Holder
{
    private $holder;

    /**
     * @return \PagSeguro\Domains\Requests\Adapter\DirectPayment\Holder
     */
    public function setHolder()
    {
        $this->holder = InitializeObject::initialize(
            $this->holder,
            '\PagSeguro\Domains\DirectPayment\CreditCard\Holder'
        );

        return new \PagSeguro\Domains\Requests\Adapter\DirectPayment\Holder($this->holder);
    }

    /**
     * @return \PagSeguro\Domains\DirectPayment\CreditCard\Holder
     */
    public function getHolder()
    {
        return $this->holder;
    }
}
