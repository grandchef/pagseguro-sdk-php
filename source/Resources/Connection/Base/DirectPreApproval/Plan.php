<?php

namespace PagSeguro\Resources\Connection\Base\DirectPreApproval;

use PagSeguro\Resources\Builder;

/** Class Payment
 * @package PagSeguro\Services\Connection\Base
 */
trait Plan
{
    /**
     * @return string
     */
    public function buildDirectPreApprovalPlanRequestUrl()
    {
        return Builder\DirectPreApproval\Plan::getPlanUrl();
    }
}
