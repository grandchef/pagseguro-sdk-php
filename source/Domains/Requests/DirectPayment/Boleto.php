<?php

namespace PagSeguro\Domains\Requests\DirectPayment;

use PagSeguro\Domains\Requests\DirectPayment\Boleto\Request;

/** Class Payment
 * @package PagSeguro\Domains\Requests
 */
class Boleto extends Request
{
    /**
     * @param $credentials
     * @return string
     * @throws \Exception
     */
    public function register($credentials)
    {
        return \PagSeguro\Services\DirectPayment\Boleto::checkout($credentials, $this);
    }
}
