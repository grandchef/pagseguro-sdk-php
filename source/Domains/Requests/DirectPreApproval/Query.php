<?php

namespace PagSeguro\Domains\Requests\DirectPreApproval;

use PagSeguro\Services\DirectPreApproval\QueryService;

/** Class Query
 *
 */
class Query extends QueryRequest
{
    /**
     * @return mixed
     */
    public function register($credentials)
    {
        return QueryService::create($credentials, $this);
    }
}
