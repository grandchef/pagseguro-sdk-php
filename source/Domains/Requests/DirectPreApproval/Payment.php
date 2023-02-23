<?php

namespace PagSeguro\Domains\Requests\DirectPreApproval;

use PagSeguro\Services\DirectPreApproval\PaymentService;

/** Class Payment
 *
 */
class Payment extends PaymentRequest
{
    /**
     * @return mixed
     */
    public function register($credentials)
    {
        return PaymentService::create($credentials, $this);
    }
}
