<?php

namespace PagSeguro\Resources\Connection\Base\Application;

use PagSeguro\Resources\Builder;

/** Class Payment
 * @package PagSeguro\Services\Connection\Base
 */
trait Authorization
{
    /**
     * @return string
     */
    public function buildAuthorizationRequestUrl()
    {
        return Builder\Application\Authorization::getRequestUrl();
    }

    /**
     * @return string
     */
    public function buildAuthorizationResponseUrl()
    {
        return Builder\Application\Authorization::getResponseUrl();
    }
}
