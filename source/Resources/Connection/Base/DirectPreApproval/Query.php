<?php

namespace PagSeguro\Resources\Connection\Base\DirectPreApproval;

use PagSeguro\Resources\Builder;

/** Class Payment
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
