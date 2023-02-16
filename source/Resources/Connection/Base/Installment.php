<?php

namespace PagSeguro\Resources\Connection\Base;

use PagSeguro\Resources\Builder;

/** Class Installment
 * @package PagSeguro\Services\Connection\Base
 */
trait Installment
{
    /**
     * @return string
     */
    public function buildInstallmentRequestUrl()
    {
        return Builder\Installment::getRequestUrl();
    }
}
