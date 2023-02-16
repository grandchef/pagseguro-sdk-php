<?php

namespace PagSeguro\Resources\Factory\Request;

use PagSeguro\Domains\PaymentMethod\Groups;
use PagSeguro\Domains\PaymentMethod\Names;

/** Class Metadata
 * @package PagSeguro\Resources\Factory\Request
 */
class Accepted
{
    /**
     * @var
     */
    private $accepted;


    public function __construct()
    {
        if (is_null($this->accepted)) {
            $this->accepted = new \PagSeguro\Domains\PaymentMethod\Accepted();
        }
    }

    /**
     * @param $group
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
     * @param $name
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
