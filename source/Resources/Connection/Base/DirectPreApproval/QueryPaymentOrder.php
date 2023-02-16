<?php

namespace PagSeguro\Resources\Connection\Base\DirectPreApproval;

use PagSeguro\Resources\Builder;

trait QueryPaymentOrder
{
    public function buildDirectPreApprovalQueryPaymentOrderRequestUrl($preApprovalCode)
    {
        return Builder\DirectPreApproval\QueryPaymentOrder::getQueryPaymentOrderUrl() . '/' . $preApprovalCode . '/payment-orders';
    }
}
