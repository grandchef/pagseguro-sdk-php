<?php

namespace PagSeguro\Domains\Requests\DirectPreApproval;

use PagSeguro\Domains\DirectPreApproval\Traits\ParserTrait;

/** Class QueryPaymentOrderRequest
 *
 */
class QueryPaymentOrderRequest
{
    use ParserTrait;

    public $preApprovalCode;

    public $status;

    public $page;

    public $maxPageResults;

    /**
     * QueryPaymentOrderRequest constructor.
     */
    public function __construct($preApprovalCode, $status, $page = 1, $maxPageResults = 50)
    {
        $this->preApprovalCode = $preApprovalCode;
        $this->status = $status;
        $this->page = $page;
        $this->maxPageResults = $maxPageResults;
    }
}
