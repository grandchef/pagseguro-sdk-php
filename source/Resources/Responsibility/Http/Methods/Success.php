<?php

namespace PagSeguro\Resources\Responsibility\Http\Methods;

use PagSeguro\Enum\Http\Status;
use PagSeguro\Resources\Http;
use PagSeguro\Resources\Responsibility\Handler;

/** Class Success
 * @package PagSeguro\Services\Connection\HttpMethods
 */
class Success implements Handler
{
    /**
     * @var
     */
    private $successor;

    /**
     * @param $successor
     * @return $this
     */
    public function successor($successor)
    {
        $this->successor = $successor;
        return $this;
    }

    /**
     * @param Http $http
     * @param $class
     * @return mixed
     */
    public function handler($http, $class)
    {
        if (in_array($http->getStatus(), array(Status::OK, Status::NO_CONTENT))) {
            return $class::success($http);
        }
        return $this->successor->handler($http, $class);
    }
}
