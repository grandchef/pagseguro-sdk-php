<?php

namespace PagSeguro\Resources\Responsibility\Factory\Request;

use PagSeguro\Resources\Responsibility\Handler;

/** Class Generic
 */
class Instance implements Handler
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
     */
    public function handler($instance, $class)
    {
        if ($instance instanceof $class) {
        }
    }
}
