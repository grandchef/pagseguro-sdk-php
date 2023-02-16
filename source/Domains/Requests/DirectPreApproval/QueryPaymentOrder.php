<?php

namespace PagSeguro\Domains\Requests\DirectPreApproval;

use PagSeguro\Services\DirectPreApproval\QueryPaymentOrderService;

/** Class QueryPaymentOrder
 *
 * @package PagSeguro\Domains\Requests\DirectPreApproval
 */
class QueryPaymentOrder extends QueryPaymentOrderRequest
{
    /**
     * @param $credentials
     *
     * @return mixed
     */
    public function register($credentials)
    {
        return QueryPaymentOrderService::create($credentials, $this);
    }
}
