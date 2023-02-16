<?php

namespace PagSeguro\Domains\Requests;

use PagSeguro\Domains\Requests\Checkout\Payment\Request;

/** Class Payment
 * @package PagSeguro\Domains\Requests
 */
class Payment extends Request
{
    /**
     * @param $credentials
     * @param bool $onlyCode
     * @return string
     * @throws \Exception
     */
    public function register($credentials, $onlyCode = false)
    {
        return \PagSeguro\Services\Checkout\Payment::checkout($credentials, $this, $onlyCode);
    }
}
