<?php

namespace PagSeguro\Domains\Requests\DirectPreApproval;

use PagSeguro\Services\DirectPreApproval\EditPlanService;

/** Class EditPlan
 *
 */
class EditPlan extends EditPlanRequest
{
    /**
     * @return mixed
     */
    public function register($credentials)
    {
        return EditPlanService::edit($credentials, $this);
    }
}
