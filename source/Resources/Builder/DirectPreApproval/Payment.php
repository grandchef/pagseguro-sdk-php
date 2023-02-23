<?php

namespace PagSeguro\Resources\Builder\DirectPreApproval;

use PagSeguro\Resources\Builder;

/** Class Payment
 *
 */
class Payment extends Builder
{
    /**
     * @return string
     */
    public static function getPaymentUrl()
    {
        return parent::getRequest(parent::getUrl('webservice'), 'directPreApproval/payment');
    }
}
