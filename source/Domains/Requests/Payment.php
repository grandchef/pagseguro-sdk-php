<?php

namespace PagSeguro\Domains\Requests;

use PagSeguro\Domains\Requests\Checkout\Payment\Request;

/** Class Payment
 */
class Payment extends Request
{
    /**
     * @param  bool  $onlyCode
     * @return string
     *
     * @throws \Exception
     */
    public function register($credentials, $onlyCode = false)
    {
        return \PagSeguro\Services\Checkout\Payment::checkout($credentials, $this, $onlyCode);
    }
}
