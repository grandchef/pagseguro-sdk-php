<?php

namespace PagSeguro\Domains\Requests\DirectPreApproval;

use PagSeguro\Services\DirectPreApproval\QueryService;

/** Class Query
 *
 * @package PagSeguro\Domains\Requests\DirectPreApproval
 */
class Query extends QueryRequest
{
    /**
     * @param $credentials
     *
     * @return mixed
     */
    public function register($credentials)
    {
        return QueryService::create($credentials, $this);
    }
}
