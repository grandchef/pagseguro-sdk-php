<?php

namespace PagSeguro\Parsers\DirectPreApproval;

use PagSeguro\Domains\Requests\DirectPreApproval\EditPlan;
use PagSeguro\Parsers\Error;
use PagSeguro\Parsers\Parser;
use PagSeguro\Resources\Http;

/** Class EditPlanParser
 * @package PagSeguro\Parsers\DirectPreApproval
 */
class EditPlanParser extends Error implements Parser
{
    /**
     * @param EditPlan $editPlan
     * @return mixed
     */
    public static function getPreApprovalRequestCode(EditPlan $editPlan)
    {
        $editPlan = $editPlan->object_to_array($editPlan);
        return $editPlan['preApprovalRequestCode'];
    }

    /**
     * @param EditPlan $editPlan
     * @return array|EditPlan
     */
    public static function getData(EditPlan $editPlan)
    {
        $editPlan = $editPlan->object_to_array($editPlan);
        unset($editPlan['preApprovalRequestCode']);
        return $editPlan;
    }

    /**
     * @param Http $http
     * @return mixed
     */
    public static function success(Http $http)
    {
        $json = json_decode($http->getResponse());

        return $json;
    }

    /**
     * @param Http $http
     * @return mixed|\PagSeguro\Domains\Error
     */
    public static function error(Http $http)
    {
        return parent::error($http);
    }
}
