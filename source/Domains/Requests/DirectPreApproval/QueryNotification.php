<?php

namespace PagSeguro\Domains\Requests\DirectPreApproval;

use PagSeguro\Services\DirectPreApproval\QueryNotificationService;

/** Class QueryNotification
 *
 * @package PagSeguro\Domains\Requests\DirectPreApproval
 */
class QueryNotification extends QueryNotificationRequest
{
    /**
     * @param $credentials
     *
     * @return mixed
     */
    public function register($credentials)
    {
        return QueryNotificationService::create($credentials, $this);
    }
}
