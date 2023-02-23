<?php

namespace PagSeguro\Resources\Responsibility\Http\Methods;

use PagSeguro\Resources\Responsibility\Handler;

/** Class Generic
 */
class Generic implements Handler
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
     * @return mixed|void
     *
     * @throws \ErrorException
     */
    public function handler($http, $class)
    {
        unset($class);
        throw new \ErrorException($http->getResponse(), $http->getStatus());
    }
}
