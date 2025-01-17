<?php

namespace PagSeguro\Resources\Builder;

use PagSeguro\Resources\Builder;

/** Class Session
 */
class Session extends Builder
{
    public static function getRequestUrl()
    {
        return parent::getRequest(
            parent::getUrl('webservice'),
            'session'
        );
    }
}
