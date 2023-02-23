<?php

namespace PagSeguro\Domains\Requests\DirectPreApproval;

use PagSeguro\Services\DirectPreApproval\DiscountService;

/** Class Discount
 *
 */
class Discount extends DiscountRequest
{
    /**
     * @return mixed
     */
    public function register($credentials)
    {
        return DiscountService::create($credentials, $this);
    }
}
