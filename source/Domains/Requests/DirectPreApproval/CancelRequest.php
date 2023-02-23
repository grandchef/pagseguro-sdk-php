<?php

namespace PagSeguro\Domains\Requests\DirectPreApproval;

use PagSeguro\Domains\DirectPreApproval\Traits\ParserTrait;

/** Class CancelRequest
 *
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

    public function setPreApprovalCode($preApprovalCode)
    {
        $this->preApprovalCode = $preApprovalCode;
    }
}
