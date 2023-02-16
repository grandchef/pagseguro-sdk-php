<?php

namespace PagSeguro\Domains\Requests\DirectPreApproval;

use PagSeguro\Services\DirectPreApproval\RetryPaymentOrderService;

/** Class Payment
 *
 * @package PagSeguro\Domains\Requests\DirectPreApproval
 */
class RetryPaymentOrder extends RetryPaymentOrderRequest
{
    /**
     * @param $credentials
     *
     * @return mixed
     */
    public function register($credentials)
    {
        return RetryPaymentOrderService::create($credentials, $this);
    }
}
