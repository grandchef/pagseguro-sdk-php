<?php

namespace PagSeguro\Domains\Requests\DirectPreApproval;

use PagSeguro\Services\DirectPreApproval\QueryPaymentOrderService;

/** Class QueryPaymentOrder
 *
 */
class QueryPaymentOrder extends QueryPaymentOrderRequest
{
    /**
     * @return mixed
     */
    public function register($credentials)
    {
        return QueryPaymentOrderService::create($credentials, $this);
    }
}
