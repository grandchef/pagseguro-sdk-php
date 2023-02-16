<?php

namespace PagSeguro\Resources\Builder\PreApproval;

use PagSeguro\Resources\Builder;

/** Class Payment
 * @package PagSeguro\Resources\Builder
 */
class Charge extends Builder
{

    /**
     * @return string
     */
    public static function getRequestUrl()
    {
        return parent::getRequest(
            parent::getUrl('webservice'),
            'preApproval/charge'
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
