<?php

namespace PagSeguro\Domains;

class Charset
{
    private $encoding;

    /**
     * @return string
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    public function setEncoding($encoding)
    {
        $this->encoding = $encoding;
    }
}
