<?php

namespace PagSeguro\Domains\Requests\DirectPreApproval;

use PagSeguro\Domains\DirectPreApproval\Traits\ParserTrait;

/** Class StatusRequest
 *
 */
class StatusRequest
{
    use ParserTrait;

    private $status;

    private $preApprovalCode;

    /**
     * StatusRequest constructor.
     */
    public function __construct()
    {
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function setPreApprovalCode($preApprovalCode)
    {
        $this->preApprovalCode = $preApprovalCode;
    }
}
