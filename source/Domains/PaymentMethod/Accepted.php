<?php

namespace PagSeguro\Domains\PaymentMethod;

/** Class Accepted
 * @package PagSeguro\Domains\PaymentMethod
 */
class Accepted
{
    /**
     * @var
     */
    private $groups;
    /**
     * @var
     */
    private $names;

    /**
     * @return array
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * @param mixed $groups
     * @return Accepted
     */
    public function setGroups($groups)
    {
        $this->groups[] = $groups;
        return $this;
    }

    /**
     * @return array
     */
    public function getNames()
    {
        return $this->names;
    }

    /**
     * @param mixed $names
     * @return Accepted
     */
    public function setNames($names)
    {
        $this->names[] = $names;
        return $this;
    }
}
