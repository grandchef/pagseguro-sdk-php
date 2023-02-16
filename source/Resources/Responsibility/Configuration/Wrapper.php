<?php

namespace PagSeguro\Resources\Responsibility\Configuration;

use PagSeguro\Resources\Responsibility\Handler;

class Wrapper implements Handler
{
    private $successor;

    public function successor($next)
    {
        $this->successor = $next;
        return $this;
    }

    public function handler($action, $class)
    {
        if (class_exists('ConfigWrapper')) {
            $configWrapper = new \ConfigWrapper;
            return array_merge(
                \PagSeguro\Helpers\Wrapper::environment($configWrapper),
                \PagSeguro\Helpers\Wrapper::credentials($configWrapper),
                \PagSeguro\Helpers\Wrapper::charset($configWrapper),
                \PagSeguro\Helpers\Wrapper::log($configWrapper)
            );
        }
        return $this->successor->handler($action, $class);
    }
}
