<?php

namespace PagSeguro\Resources\Connection\Base\DirectPreApproval;

use PagSeguro\Resources\Builder;

/** Class RetryPaymentOrder
 *
 * @package PagSeguro\Services\Connection\Base
 */
trait RetryPaymentOrder
{
    /**
     * @param $preApprovalCode
     * @param $paymentOrderCode
     *
     * @return string
     */
    public function buildDirectPreApprovalRetryPaymentOrderUrl($preApprovalCode, $paymentOrderCode)
    {
        // TODO $preApprovalCode & $paymentOrderCode must be a string
        return Builder\DirectPreApproval\RetryPaymentOrder::getRetryPaymentOrderUrl() .
            '/' . $preApprovalCode . '/payment-orders/' . $paymentOrderCode . '/payment';
    }
}
