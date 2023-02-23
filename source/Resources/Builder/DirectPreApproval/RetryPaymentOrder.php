<?php

namespace PagSeguro\Resources\Builder\DirectPreApproval;

use PagSeguro\Resources\Builder;

/** Class RetryPaymentOrder
 *
 */
class RetryPaymentOrder extends Builder
{
    /**
     * @return string
     */
    public static function getRetryPaymentOrderUrl()
    {
        return parent::getRequest(parent::getUrl('webservice'), 'directPreApproval/retryPaymentOrder');
    }
}
