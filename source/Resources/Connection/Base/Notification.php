<?php

namespace PagSeguro\Resources\Connection\Base;

use PagSeguro\Resources\Builder;

/** Class Payment
 */
trait Notification
{
    /**
     * @return string
     */
    public function buildNotificationTransactionRequestUrl()
    {
        return Builder\Notification::getTransactionRequestUrl();
    }

    /**
     * @return string
     */
    public function buildNotificationAuthorizationRequestUrl()
    {
        return Builder\Notification::getAuthorizationRequestUrl();
    }

    /**
     * @return string
     */
    public function buildNotificationPreApprovalRequestUrl()
    {
        return Builder\Notification::getPreApprovalRequestUrl();
    }
}
