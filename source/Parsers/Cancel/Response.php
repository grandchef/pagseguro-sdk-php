<?php

namespace PagSeguro\Parsers\Cancel;

/** Class Response
 * @package PagSeguro\Parsers\Cancel
 */
class Response
{
    /**
     * @var
     */
    private $result;

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param mixed $result
     * @return Response
     */
    public function setResult($result)
    {
        $this->result = $result;
    }
}
