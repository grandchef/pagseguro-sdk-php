<?php

namespace PagSeguro\Resources\Builder\DirectPreApproval;

use PagSeguro\Resources\Builder;

/** Class QueryPaymentOrder
 *
 */
class QueryPaymentOrder extends Builder
{
    /**
     * @return string
     */
    public static function getQueryPaymentOrderUrl()
    {
        return parent::getRequest(parent::getUrl('webservice'), 'directPreApproval/queryPaymentOrder');
    }
}
