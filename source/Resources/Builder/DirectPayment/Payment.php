<?php

namespace PagSeguro\Resources\Builder\DirectPayment;

use PagSeguro\Resources\Builder;

/** Class Payment
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
            'directPayment'
        );
    }
}
