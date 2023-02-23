<?php

namespace PagSeguro\Domains\Requests\DirectPreApproval;

use PagSeguro\Services\DirectPreApproval\PlanService;

/** Class Plan
 *
 */
class Plan extends PlanRequest
{
    /**
     * @return mixed
     */
    public function register($credentials)
    {
        return PlanService::create($credentials, $this);
    }
}
