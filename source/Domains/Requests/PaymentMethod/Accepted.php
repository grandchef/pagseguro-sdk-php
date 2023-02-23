<?php

namespace PagSeguro\Domains\Requests\PaymentMethod;

trait Accepted
{
    private $accept;

    private $exclude;

    /**
     * @return \PagSeguro\Resources\Factory\Request\Accepted
     */
    public function accept()
    {
        if (is_null($this->accept)) {
            $this->accept = new \PagSeguro\Resources\Factory\Request\Accepted();
        }

        return $this->accept;
    }

    /**
     * @return \PagSeguro\Resources\Factory\Request\Accepted
     */
    public function exclude()
    {
        if (is_null($this->exclude)) {
            $this->exclude = new \PagSeguro\Resources\Factory\Request\Accepted();
        }

        return $this->exclude;
    }

    public function getAttributeMap()
    {
        return [
            'accept' => $this->accept,
            'exclude' => $this->exclude,
        ];
    }
}
