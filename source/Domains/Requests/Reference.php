<?php

namespace PagSeguro\Domains\Requests;

trait Reference
{
    private $reference;

    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    public function getReference()
    {
        return $this->reference;
    }
}
