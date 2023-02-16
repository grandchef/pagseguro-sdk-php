<?php

namespace PagSeguro\Resources\Responsibility\Factory\Request;

use PagSeguro\Resources\Http;
use PagSeguro\Resources\Responsibility\Handler;

/** Class Generic
 * @package PagSeguro\Services\Connection\HttpMethods
 */
class Instance implements Handler
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
     * @param $instance
     * @param $class
     * @return mixed|void
     */
    public function handler($instance, $class)
    {
        if ($instance instanceof $class) {
        }
    }
}
