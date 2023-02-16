<?php

namespace PagSeguro\Resources\Connection\Base\Transaction;

use PagSeguro\Resources\Builder;

/** Class Payment
 * @package PagSeguro\Services\Connection\Base
 */
trait Search
{
    /**
     * @return string
     */
    public function buildSearchRequestUrl()
    {
        return Builder\Transaction\Search::getSearchRequestUrl();
    }
}
