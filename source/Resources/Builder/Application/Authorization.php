<?php

namespace PagSeguro\Resources\Builder\Application;

use PagSeguro\Resources\Builder;

/** Class Payment
 * @package PagSeguro\Resources\Builder
 */
class Authorization extends Builder
{

    /**
     * @return string
     */
    public static function getRequestUrl()
    {
        return parent::getRequest(
            parent::getUrl('webservice'),
            'application/authorization'
        );
    }

    /**
     * @return string
     */
    public static function getResponseUrl()
    {
        return parent::getResponse(
            parent::getUrl('base'),
            'application/authorization'
        );
    }
}
