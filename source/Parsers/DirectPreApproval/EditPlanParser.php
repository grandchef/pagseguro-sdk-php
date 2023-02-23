<?php

namespace PagSeguro\Parsers\DirectPreApproval;

use PagSeguro\Domains\Requests\DirectPreApproval\EditPlan;
use PagSeguro\Parsers\Error;
use PagSeguro\Parsers\Parser;
use PagSeguro\Resources\Http;

/** Class EditPlanParser
 */
class EditPlanParser extends Error implements Parser
{
    /**
     * @return mixed
     */
    public static function getPreApprovalRequestCode(EditPlan $editPlan)
    {
        $editPlan = $editPlan->object_to_array($editPlan);

        return $editPlan['preApprovalRequestCode'];
    }

    /**
     * @return array|EditPlan
     */
    public static function getData(EditPlan $editPlan)
    {
        $editPlan = $editPlan->object_to_array($editPlan);
        unset($editPlan['preApprovalRequestCode']);

        return $editPlan;
    }

    /**
     * @return mixed
     */
    public static function success(Http $http)
    {
        $json = json_decode($http->getResponse());

        return $json;
    }

    /**
     * @return mixed|\PagSeguro\Domains\Error
     */
    public static function error(Http $http)
    {
        return parent::error($http);
    }
}
