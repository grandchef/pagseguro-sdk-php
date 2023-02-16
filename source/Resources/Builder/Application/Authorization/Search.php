<?php

namespace PagSeguro\Resources\Builder\Application\Authorization;

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
            'application/search'
        );
    }
}
