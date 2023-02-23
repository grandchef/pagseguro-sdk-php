<?php

namespace PagSeguro\Domains\Requests\Sender;

trait Document
{
    private $document;

    public function getDocument()
    {
        return current($this->document);
    }

    public function setDocument()
    {
        $this->document = new \PagSeguro\Resources\Factory\Sender\Document($this->sender);

        return $this->document;
    }
}
