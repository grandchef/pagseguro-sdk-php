<?php

namespace PagSeguro\Domains\Requests\DirectPayment\CreditCard\Holder;

trait Document
{

    private $document;

    public function getDocument()
    {
        return current($this->document);
    }

    public function setDocument()
    {
        $this->document =
            new \PagSeguro\Resources\Factory\Request\DirectPayment\CreditCard\Holder\Document($this->holder);
        return $this->document;
    }
}
