<?php

namespace PagSeguro\Resources\Connection\Base\Transaction;

use PagSeguro\Resources\Builder;

/** Class Payment
 * @package PagSeguro\Services\Connection\Base
 */
trait Abandoned
{
    /**
     * @return string
     */
    public function buildAbandonedRequestUrl()
    {
        return Builder\Transaction\Abandoned::getRequestUrl();
    }
}
