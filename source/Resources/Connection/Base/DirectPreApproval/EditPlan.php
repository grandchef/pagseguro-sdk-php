<?php

namespace PagSeguro\Resources\Connection\Base\DirectPreApproval;

use PagSeguro\Resources\Builder;

/** Class EditPlan
 */
trait EditPlan
{
    /**
     * @return string
     */
    public function buildDirectPreApprovalEditPlanRequestUrl($preApprovalRequestCode)
    {
        return Builder\DirectPreApproval\EditPlan::getEditPlanUrl().'/'.$preApprovalRequestCode.'/payment';
    }
}
