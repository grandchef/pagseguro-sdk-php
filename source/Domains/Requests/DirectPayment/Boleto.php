<?php

namespace PagSeguro\Domains\Requests\DirectPayment;

use PagSeguro\Domains\Requests\DirectPayment\Boleto\Request;

/** Class Payment
 */
class Boleto extends Request
{
    /**
     * @return string
     *
     * @throws \Exception
     */
    public function register($credentials)
    {
        return \PagSeguro\Services\DirectPayment\Boleto::checkout($credentials, $this);
    }
}
