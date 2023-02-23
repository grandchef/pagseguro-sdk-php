<?php

namespace PagSeguro\Resources\Responsibility\Http\Methods;

use PagSeguro\Enum\Http\Status;
use PagSeguro\Resources\Http;
use PagSeguro\Resources\Responsibility\Handler;

/** Class Request
 */
class Request implements Handler
{
    private $successor;

    /**
     * @return $this
     */
    public function successor($successor)
    {
        $this->successor = $successor;

        return $this;
    }

    /**
     * @param  Http  $http
     * @return mixed
     *
     * @throws \Exception
     */
    public function handler($http, $class)
    {
        if ($http->getStatus() == Status::BAD_REQUEST) {
            $error = $class::error($http);
            throw new \Exception($error->getMessage(), $error->getCode());
        }

        return $this->successor->handler($http, $class);
    }
}
