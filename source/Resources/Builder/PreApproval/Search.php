<?php

namespace PagSeguro\Resources\Builder\PreApproval;

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
            'preApproval/search'
        );
    }
}
