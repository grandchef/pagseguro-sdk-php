<?php

namespace PagSeguro\Domains\Requests\DirectPreApproval;

use PagSeguro\Services\DirectPreApproval\RetryPaymentOrderService;

/** Class Payment
 *
 */
class RetryPaymentOrder extends RetryPaymentOrderRequest
{
    /**
     * @return mixed
     */
    public function register($credentials)
    {
        return RetryPaymentOrderService::create($credentials, $this);
    }
}
