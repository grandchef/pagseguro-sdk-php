<?php

namespace PagSeguro\Domains\Requests\DirectPayment;

use PagSeguro\Domains\Requests\DirectPayment\CreditCard\Request;

/** Class Payment
 * @package PagSeguro\Domains\Requests\DirectPayment
 */
class CreditCard extends Request
{
    /**
     * @param $credentials
     * @return string
     * @throws \Exception
     */
    public function register($credentials)
    {
        return \PagSeguro\Services\DirectPayment\CreditCard::checkout($credentials, $this);
    }
}
