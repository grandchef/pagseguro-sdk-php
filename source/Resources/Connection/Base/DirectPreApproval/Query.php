<?php

namespace PagSeguro\Resources\Connection\Base\DirectPreApproval;

use PagSeguro\Resources\Builder;

/** Class Payment
 * @package PagSeguro\Services\Connection\Base
 */
trait Query
{
    /**
     * @return string
     */
    public function buildDirectPreApprovalQueryRequestUrl()
    {
        return Builder\DirectPreApproval\Query::getQueryUrl();
    }
}
