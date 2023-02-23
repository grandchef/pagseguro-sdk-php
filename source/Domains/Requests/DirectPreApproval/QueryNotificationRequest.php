<?php

namespace PagSeguro\Domains\Requests\DirectPreApproval;

use PagSeguro\Domains\DirectPreApproval\Traits\ParserTrait;

/** Class QueryNotificationRequest
 *
 */
class QueryNotificationRequest
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

    public $interval;

    /**
     * @var null
     */
    public $notificationCode;

    /**
     * QueryNotificationRequest constructor.
     *
     * @param  int  $page
     * @param  int  $maxPageResults
     * @param  null  $notificationCode
     */
    public function __construct(
        $page,
        $maxPageResults,
        $interval,
        $notificationCode = null
    ) {
        $this->page = $page;
        $this->maxPageResults = $maxPageResults;
        $this->interval = $interval;
        $this->notificationCode = $notificationCode;
    }
}
