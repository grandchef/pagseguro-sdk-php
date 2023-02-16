<?php

namespace PagSeguro\Domains\Requests\DirectPreApproval;

use PagSeguro\Domains\DirectPreApproval\Traits\ParserTrait;

/** Class StatusRequest
 *
 * @package PagSeguro\Domains\Requests\DirectPreApproval
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

    /**
     * @param $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @param $preApprovalCode
     */
    public function setPreApprovalCode($preApprovalCode)
    {
        $this->preApprovalCode = $preApprovalCode;
    }
}
