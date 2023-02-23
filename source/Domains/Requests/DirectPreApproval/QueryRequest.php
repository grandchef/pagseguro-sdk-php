<?php

namespace PagSeguro\Domains\Requests\DirectPreApproval;

use PagSeguro\Domains\DirectPreApproval\Traits\ParserTrait;

/** Class QueryRequest
 *
 */
class QueryRequest
{
    use ParserTrait;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $maxPageResults;

    /**
     * @var false|string
     */
    public $initialDate;

    /**
     * @var false|string
     */
    public $finalDate;

    /**
     * @var null
     */
    public $status;

    /**
     * @var null
     */
    public $preApprovalRequest;

    /**
     * @var null
     */
    public $senderEmail;

    /**
     * @var null
     */
    public $preApprovalCode;

    /**
     * QueryRequest constructor.
     *
     * @param  int  $page
     * @param  int  $maxPageResults
     * @param  null  $preApprovalCode
     */
    public function __construct(
        $page,
        $maxPageResults,
        $initialDate,
        $finalDate = null,
        $status = null,
        $preApprovalRequest = null,
        $senderEmail = null,
        $preApprovalCode = null
    ) {
        $this->page = $page;
        $this->maxPageResults = $maxPageResults;
        $this->initialDate = gmdate('Y-m-d\TH:i:s.z\T\Z\D', strtotime($initialDate));
        $this->finalDate = gmdate('Y-m-d\TH:i:s.z\T\Z\D', strtotime($finalDate));
        $this->status = $status;
        $this->preApprovalRequest = $preApprovalRequest;
        $this->senderEmail = $senderEmail;
        $this->preApprovalCode = $preApprovalCode;
    }
}
