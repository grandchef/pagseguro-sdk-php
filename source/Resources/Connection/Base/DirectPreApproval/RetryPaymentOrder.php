<?php

namespace PagSeguro\Resources\Connection\Base\DirectPreApproval;

use PagSeguro\Resources\Builder;

/** Class RetryPaymentOrder
 *
 */
trait RetryPaymentOrder
{
    /**
     * @return string
     */
    public function buildDirectPreApprovalRetryPaymentOrderUrl($preApprovalCode, $paymentOrderCode)
    {
        // TODO $preApprovalCode & $paymentOrderCode must be a string
        return Builder\DirectPreApproval\RetryPaymentOrder::getRetryPaymentOrderUrl().
            '/'.$preApprovalCode.'/payment-orders/'.$paymentOrderCode.'/payment';
    }
}
