<?php

namespace PagSeguro\Parsers\Transaction\Refund;

/** Class Response
 * @package PagSeguro\Parsers\Transaction\Refund
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
