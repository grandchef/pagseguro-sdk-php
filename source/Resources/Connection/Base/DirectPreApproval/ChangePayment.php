<?php

namespace PagSeguro\Resources\Connection\Base\DirectPreApproval;

use PagSeguro\Resources\Builder;

trait ChangePayment
{
    public function buildDirectPreApprovalChangePaymentRequestUrl($preApprovalCode)
    {
        return Builder\DirectPreApproval\ChangePayment::getChangePaymentUrl() . '/' . $preApprovalCode . '/payment-method';
    }
}
