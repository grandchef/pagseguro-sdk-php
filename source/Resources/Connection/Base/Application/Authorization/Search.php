<?php

namespace PagSeguro\Resources\Connection\Base\Application\Authorization;

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
        return Builder\Application\Authorization\Search::getSearchRequestUrl();
    }
}
