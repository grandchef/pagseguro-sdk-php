<?php

namespace PagSeguro\Domains\Requests\DirectPreApproval;

use PagSeguro\Services\DirectPreApproval\EditPlanService;

/** Class EditPlan
 *
 * @package PagSeguro\Domains\Requests\DirectPreApproval
 */
class EditPlan extends EditPlanRequest
{
    /**
     * @param $credentials
     *
     * @return mixed
     */
    public function register($credentials)
    {
        return EditPlanService::edit($credentials, $this);
    }
}