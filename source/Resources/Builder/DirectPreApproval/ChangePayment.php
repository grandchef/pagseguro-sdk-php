<?php

namespace PagSeguro\Resources\Builder\DirectPreApproval;

use PagSeguro\Resources\Builder;

/** Class ChangePayment
 *
 * @package PagSeguro\Resources\Builder\DirectPreApproval
 */
class ChangePayment extends Builder
{
    /**
     * @return string
     */
    public static function getChangePaymentUrl()
    {
        return parent::getRequest(parent::getUrl('webservice'), 'directPreApproval/changePayment');
    }
}
