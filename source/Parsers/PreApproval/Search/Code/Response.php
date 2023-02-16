<?php

namespace PagSeguro\Parsers\PreApproval\Search\Code;

/** Class Response
 * @package PagSeguro\Parsers\PreApproval\Search\Code
 */
class Response extends \PagSeguro\Parsers\PreApproval\Search\Response
{
    /**
     * @var
     */
    private $sender;

    /**
     * @return mixed
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @param mixed $sender
     * @return Response
     */
    public function setSender($sender)
    {
        $this->sender = $sender;
        return $this;
    }
}
