<?php

namespace PagSeguro\Resources\Connection\Base\DirectPreApproval;

use PagSeguro\Resources\Builder;

trait Status
{
    public function buildDirectPreApprovalStatusRequestUrl($preApprovalCode)
    {
        return Builder\DirectPreApproval\Status::getStatusUrl() . '/' . $preApprovalCode . '/status';
    }
}
