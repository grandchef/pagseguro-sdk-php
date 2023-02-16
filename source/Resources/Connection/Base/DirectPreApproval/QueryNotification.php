<?php

namespace PagSeguro\Resources\Connection\Base\DirectPreApproval;

use PagSeguro\Resources\Builder;

trait QueryNotification
{
    public function buildDirectPreApprovalQueryNotificationRequestUrl($preApprovalCode = null)
    {
        return Builder\DirectPreApproval\QueryNotification::getQueryNotificationUrl() . ($preApprovalCode ? '/' . $preApprovalCode : '');
    }
}
