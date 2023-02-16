<?php

namespace PagSeguro\Domains\Requests\DirectPreApproval;

use PagSeguro\Domains\DirectPreApproval\Traits\ParserTrait;

/** Class CancelRequest
 *
 * @package PagSeguro\Domains\Requests\DirectPreApproval
 */
class CancelRequest
{
    use ParserTrait;
    private $preApprovalCode;

    /**
     * CancelRequest constructor.
     */
    public function __construct()
    {
    }

    /**
     * @param $preApprovalCode
     */
    public function setPreApprovalCode($preApprovalCode)
    {
        $this->preApprovalCode = $preApprovalCode;
    }
}
