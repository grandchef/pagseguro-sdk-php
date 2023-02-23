<?php

namespace PagSeguro\Resources\Builder;

use PagSeguro\Resources\Builder;

/** Class Payment
 */
class Refund extends Builder
{
    /**
     * @return string
     */
    public static function getRequestUrl()
    {
        return parent::getRequest(
            parent::getUrl('webservice'),
            'refund'
        );
    }
}
