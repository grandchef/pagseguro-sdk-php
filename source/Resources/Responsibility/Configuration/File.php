<?php

namespace PagSeguro\Resources\Responsibility\Configuration;

use PagSeguro\Configuration\Wrapper;
use PagSeguro\Resources\Responsibility\Handler;

class File implements Handler
{
    private $successor;

    public function successor($next)
    {
        $this->successor = $next;

        return $this;
    }

    public function handler($action, $class)
    {
        if (file_exists(PS_CONFIG_PATH.'Wrapper.php')) {
            $wrapper = new Wrapper;

            return array_merge(
                \PagSeguro\Helpers\Wrapper::environment($wrapper),
                \PagSeguro\Helpers\Wrapper::credentials($wrapper),
                \PagSeguro\Helpers\Wrapper::charset($wrapper),
                \PagSeguro\Helpers\Wrapper::log($wrapper)
            );
        }

        return $this->successor->handler($action, $class);
    }
}
