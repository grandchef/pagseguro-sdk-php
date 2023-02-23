<?php

namespace PagSeguro\Domains\Requests\DirectPreApproval;

use PagSeguro\Domains\DirectPreApproval\Traits\ParserTrait;

/** Class EditPlanRequest
 *
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

    public function setPreApprovalRequestCode($preApprovalRequestCode)
    {
        $this->preApprovalRequestCode = $preApprovalRequestCode;
    }

    public function setAmountPerPayment($amountPerPayment)
    {
        $this->amountPerPayment = $amountPerPayment;
    }

    public function setUpdateSubscriptions($updateSubscriptions)
    {
        $this->updateSubscriptions = $updateSubscriptions;
    }
}
