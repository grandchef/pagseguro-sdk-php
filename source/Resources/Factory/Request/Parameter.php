<?php

namespace PagSeguro\Resources\Factory\Request;

/** Description of Parameter
 *
 */
class Parameter
{
    private $parameter;

    public function __construct()
    {
        $this->parameter = [];
    }

    public function instance(\PagSeguro\Domains\Parameter $parameter)
    {
        return $parameter;
    }

    public function withArray($array)
    {
        $parameter = new \PagSeguro\Domains\Parameter();
        $parameter->setKey($array[0])
            ->setValue($array[1]);

        array_push($this->parameter, $parameter);

        if (! empty($array[2])) {
            return $this->index($array[2]);
        }

        return $this->parameter;
    }

    public function withParameters($key, $value)
    {
        $parameter = new \PagSeguro\Domains\Parameter();
        $parameter->setKey($key)
            ->setValue($value);
        array_push($this->parameter, $parameter);

        return $this;
    }

    public function index($index)
    {
        end($this->parameter)->setIndex($index);

        return $this->parameter;
    }
}
