<?php

namespace PagSeguro\Resources\Builder\Checkout;

use PagSeguro\Resources\Builder;

/** Class Payment
 * @package PagSeguro\Resources\Builder
 */
class Payment extends Builder
{

    /**
     * @return string
     */
    public static function getRequestUrl()
    {
        return parent::getRequest(
            parent::getUrl('webservice'),
            'payment'
        );
    }

    /**
     * @return string
     */
    public static function getResponseUrl()
    {
        return parent::getResponse(
            parent::getUrl('base'),
            'payment'
        );
    }
}
