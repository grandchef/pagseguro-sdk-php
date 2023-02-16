<?php

namespace PagSeguro\Domains\Requests\DirectPreApproval;

use PagSeguro\Services\DirectPreApproval\DiscountService;

/** Class Discount
 *
 * @package PagSeguro\Domains\Requests\DirectPreApproval
 */
class Discount extends DiscountRequest
{
    /**
     * @param $credentials
     *
     * @return mixed
     */
    public function register($credentials)
    {
        return DiscountService::create($credentials, $this);
    }
}
