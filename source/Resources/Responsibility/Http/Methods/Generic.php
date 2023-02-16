<?php

namespace PagSeguro\Resources\Responsibility\Http\Methods;

use PagSeguro\Resources\Responsibility\Handler;

/** Class Generic
 * @package PagSeguro\Services\Connection\HttpMethods
 */
class Generic implements Handler
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
     * @param $http
     * @param $class
     * @return mixed|void
     * @throws \ErrorException
     */
    public function handler($http, $class)
    {
        unset($class);
        throw new \ErrorException($http->getResponse(), $http->getStatus());
    }
}
