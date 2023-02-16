<?php

namespace PagSeguro\Resources\Builder\DirectPreApproval;

use PagSeguro\Resources\Builder;

/** Class EditPlan
 *
 * @package PagSeguro\Resources\Builder\DirectPreApproval
 */
class EditPlan extends Builder
{
    /**
     * @return string
     */
    public static function getEditPlanUrl()
    {
        return parent::getRequest(parent::getUrl('webservice'), 'directPreApproval/plan');
    }
}