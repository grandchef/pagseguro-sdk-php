<?php

namespace PagSeguro\Parsers\Checkout;

/** Class Response
 * @package PagSeguro\Parsers\Checkout
 */
class Response
{

    /**
     * @var
     */
    private $code;
    /**
     * @var
     */
    private $date;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return Response
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     * @return Response
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }
}
