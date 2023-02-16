<?php

namespace PagSeguro\Parsers\Authorization;

/** Class Response
 * @package PagSeguro\Parsers\Authorization
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
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return $this
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
