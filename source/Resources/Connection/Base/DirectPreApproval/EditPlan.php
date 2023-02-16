<?php

namespace PagSeguro\Resources\Connection\Base\DirectPreApproval;

use PagSeguro\Resources\Builder;

/** Class EditPlan
 * @package PagSeguro\Services\Connection\Base
 */
trait EditPlan
{
    /**
     * @param $preApprovalRequestCode
     * @return string
     */
    public function buildDirectPreApprovalEditPlanRequestUrl($preApprovalRequestCode)
    {
        return Builder\DirectPreApproval\EditPlan::getEditPlanUrl() . '/' . $preApprovalRequestCode . '/payment';
    }
}