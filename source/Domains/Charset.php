<?php

namespace PagSeguro\Domains;

class Charset
{
    /**
     * @var
     */
    private $encoding;

    /**
     * @return string
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * @param $encoding
     */
    public function setEncoding($encoding)
    {
        $this->encoding = $encoding;
    }
}
