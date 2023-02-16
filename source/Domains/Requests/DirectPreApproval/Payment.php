<?php

namespace PagSeguro\Domains\Requests\DirectPreApproval;

use PagSeguro\Services\DirectPreApproval\PaymentService;

/** Class Payment
 *
 * @package PagSeguro\Domains\Requests\DirectPreApproval
 */
class Payment extends PaymentRequest
{
    /**
     * @param $credentials
     *
     * @return mixed
     */
    public function register($credentials)
    {
        return PaymentService::create($credentials, $this);
    }
}
