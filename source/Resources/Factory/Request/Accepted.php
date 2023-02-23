<?php

namespace PagSeguro\Resources\Factory\Request;

/** Class Metadata
 */
class Accepted
{
    private $accepted;

    public function __construct()
    {
        if (is_null($this->accepted)) {
            $this->accepted = new \PagSeguro\Domains\PaymentMethod\Accepted();
        }
    }

    /**
     * @return \PagSeguro\Domains\PaymentMethod\Accepted
     */
    public function group($group)
    {
        $this->accepted->setGroups($group);

        return $this->accepted;
    }

    /**
     * @return \PagSeguro\Domains\PaymentMethod\Accepted
     */
    public function groups()
    {
        foreach (func_get_args() as $args) {
            $this->accepted->setGroups($args);
        }

        return $this->accepted;
    }

    /**
     * @return \PagSeguro\Domains\PaymentMethod\Accepted
     */
    public function name($name)
    {
        $this->accepted->setNames($name);

        return $this->accepted;
    }

    /**
     * @return \PagSeguro\Domains\PaymentMethod\Accepted
     */
    public function names()
    {
        foreach (func_get_args() as $args) {
            $this->accepted->setNames($args);
        }

        return $this->accepted;
    }
}
