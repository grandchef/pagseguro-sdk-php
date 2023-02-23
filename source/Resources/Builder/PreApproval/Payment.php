<?php

namespace PagSeguro\Resources\Builder\PreApproval;

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
            'preApproval'
        );
    }

    /**
     * @return string
     */
    public static function getResponseUrl()
    {
        return parent::getResponse(
            parent::getUrl('base'),
            'preApproval'
        );
    }
}
