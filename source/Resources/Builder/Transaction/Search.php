<?php

namespace PagSeguro\Resources\Builder\Transaction;

use PagSeguro\Resources\Builder;

/** Class Payment
 * @package PagSeguro\Resources\Builder
 */
class Search extends Builder
{

    /**
     * @return string
     */
    public static function getSearchRequestUrl()
    {
        return parent::getRequest(
            parent::getUrl('webservice'),
            'transaction/search'
        );
    }
}
