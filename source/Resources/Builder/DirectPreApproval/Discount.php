<?php

namespace PagSeguro\Resources\Builder\DirectPreApproval;

use PagSeguro\Resources\Builder;

/** Class Discount
 *
 * @package PagSeguro\Resources\Builder\DirectPreApproval
 */
class Discount extends Builder
{
    /**
     * @return string
     */
    public static function getDiscountUrl()
    {
        return parent::getRequest(parent::getUrl('webservice'), 'directPreApproval/discount');
    }
}
