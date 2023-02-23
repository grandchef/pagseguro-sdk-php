<?php

namespace PagSeguro\Resources\Responsibility\Http\Methods;

use PagSeguro\Enum\Http\Status;
use PagSeguro\Resources\Http;
use PagSeguro\Resources\Responsibility\Handler;

/** Class Success
 */
class Success implements Handler
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
     */
    public function handler($http, $class)
    {
        if (in_array($http->getStatus(), [Status::OK, Status::NO_CONTENT])) {
            return $class::success($http);
        }

        return $this->successor->handler($http, $class);
    }
}
