<?php

namespace PagSeguro\Parsers\Transaction\Refund;

/** Class Response
 */
class Response
{
    private $result;

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param  mixed  $result
     * @return Response
     */
    public function setResult($result)
    {
        $this->result = $result;
    }
}
