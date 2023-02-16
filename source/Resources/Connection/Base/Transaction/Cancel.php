<?php

namespace PagSeguro\Resources\Connection\Base\Transaction;

use PagSeguro\Resources\Builder;

/** Class Payment
 * @package PagSeguro\Services\Connection\Base
 */
trait Cancel
{
    /**
     * @return string
     */
    public function buildCancelRequestUrl()
    {
        return Builder\Transaction\Cancel::getCancelUrl();
    }
}
