<?php

namespace PagSeguro\Domains;

/***
 * Represent a parameter item
 */
class Parameter
{
    /***
     * Allow add extra information to order
     *
     * @var string
     */
    private $key;

    /***
     * Value of corresponding key
     *
     * @var mixed
     */
    private $value;

    /***
     * Used for the index of values of parameter
     * @var mixed
     */
    private $index;

    /***
     * Gets the parameter item key
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param $key
     * @return $this
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /***
     * Gets parameter item value
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /***
     * Gets parameter index
     *
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * @param $index
     * @return $this
     */
    public function setIndex($index)
    {
        $this->index = (int) $index;
        return $this;
    }
}
