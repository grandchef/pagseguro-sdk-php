<?php

namespace PagSeguro\Resources\Connection\Base;

use PagSeguro\Resources\Builder;

/** Class Payment
 * @package PagSeguro\Services\Connection\Base
 */
trait Refund
{
    /**
     * @return string
     */
    public function buildRefundRequestUrl()
    {
        return Builder\Refund::getRequestUrl();
    }
}
