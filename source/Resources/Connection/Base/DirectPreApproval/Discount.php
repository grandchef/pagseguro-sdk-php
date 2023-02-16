<?php

namespace PagSeguro\Resources\Connection\Base\DirectPreApproval;

use PagSeguro\Resources\Builder;

trait Discount
{
    public function buildDirectPreApprovalDiscountRequestUrl($preApprovalCode)
    {
        return Builder\DirectPreApproval\Discount::getDiscountUrl() . '/' . $preApprovalCode . '/discount';
    }
}
