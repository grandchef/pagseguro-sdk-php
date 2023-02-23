<?php

namespace PagSeguro\Resources\Connection\Base\Transaction;

use PagSeguro\Resources\Builder;

/** Class Payment
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
