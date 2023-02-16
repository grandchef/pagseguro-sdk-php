<?php

namespace PagSeguro\Domains\Requests\DirectPreApproval;

use PagSeguro\Services\DirectPreApproval\PlanService;

/** Class Plan
 *
 * @package PagSeguro\Domains\Requests\DirectPreApproval
 */
class Plan extends PlanRequest
{
    /**
     * @param $credentials
     *
     * @return mixed
     */
    public function register($credentials)
    {
        return PlanService::create($credentials, $this);
    }
}
