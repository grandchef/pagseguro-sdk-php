<?php

namespace PagSeguro\Domains\Requests\DirectPreApproval;

use PagSeguro\Domains\DirectPreApproval\Traits\ParserTrait;

/** Class QueryNotificationRequest
 *
 * @package PagSeguro\Domains\Requests\DirectPreApproval
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
    /**
     * @var
     */
    public $interval;
    /**
     * @var null
     */
    public $notificationCode;

    /**
     * QueryNotificationRequest constructor.
     *
     * @param int  $page
     * @param int  $maxPageResults
     * @param      $interval
     * @param null $notificationCode
     */
    public function __construct(
        $page = 1,
        $maxPageResults = 50,
        $interval,
        $notificationCode = null
    ) {
        $this->page = $page;
        $this->maxPageResults = $maxPageResults;
        $this->interval = $interval;
        $this->notificationCode = $notificationCode;
    }
}
