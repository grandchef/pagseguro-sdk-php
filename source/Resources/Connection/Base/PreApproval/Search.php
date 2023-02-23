<?php

namespace PagSeguro\Resources\Connection\Base\PreApproval;

use PagSeguro\Resources\Builder;

/** Class Payment
 */
trait Search
{
    /**
     * @return string
     */
    public function buildSearchRequestUrl()
    {
        return Builder\PreApproval\Search::getSearchRequestUrl();
    }
}
