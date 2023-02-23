<?php

namespace PagSeguro\Domains\Requests\DirectPayment;

use PagSeguro\Domains\Requests\DirectPayment\CreditCard\Request;

/** Class Payment
 */
class CreditCard extends Request
{
    /**
     * @return string
     *
     * @throws \Exception
     */
    public function register($credentials)
    {
        return \PagSeguro\Services\DirectPayment\CreditCard::checkout($credentials, $this);
    }
}
