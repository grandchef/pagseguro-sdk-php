<?php

namespace PagSeguro\Domains\Requests\DirectPreApproval;

use PagSeguro\Domains\DirectPreApproval\Traits\ParserTrait;

/** Class EditPlanRequest
 *
 * @package PagSeguro\Domains\Requests\DirectPreApproval
 */
class EditPlanRequest
{
    use ParserTrait;
    public $preApprovalRequestCode;
    public $amountPerPayment;
    public $updateSubscriptions;

    /**
     * EditPlanRequest constructor.
     */
    public function __construct()
    {

    }

    /**
    * @param $preApprovalRequestCode
    */
    public function setPreApprovalRequestCode($preApprovalRequestCode)
    {
        $this->preApprovalRequestCode = $preApprovalRequestCode;
    }

    /**
     * @param $amountPerPayment
     */
    public function setAmountPerPayment($amountPerPayment)
    {
        $this->amountPerPayment = $amountPerPayment;
    }

    /**
     * @param $updateSubscriptions
     */
    public function setUpdateSubscriptions($updateSubscriptions)
    {
        $this->updateSubscriptions = $updateSubscriptions;
    }
}