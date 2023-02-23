<?php

namespace PagSeguro\Domains\Requests\DirectPreApproval;

use PagSeguro\Services\DirectPreApproval\QueryNotificationService;

/** Class QueryNotification
 *
 */
class QueryNotification extends QueryNotificationRequest
{
    /**
     * @return mixed
     */
    public function register($credentials)
    {
        return QueryNotificationService::create($credentials, $this);
    }
}
