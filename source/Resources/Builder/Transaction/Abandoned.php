<?php

namespace PagSeguro\Resources\Builder\Transaction;

use PagSeguro\Resources\Builder;

/** Class Payment
 */
class Abandoned extends Builder
{
    /**
     * @return string
     */
    public static function getRequestUrl()
    {
        return parent::getRequest(
            parent::getUrl('webservice'),
            'transaction/abandoned'
        );
    }
}
