<?php

namespace PagSeguro\Domains\Requests;

/** Description of ReceiverEmail
 *
 */
trait ReceiverEmail
{
    private $receiverEmail;
    
    public function getReceiverEmail()
    {
        return $this->receiverEmail;
    }

    public function setReceiverEmail($receiverEmail)
    {
        $this->receiverEmail = $receiverEmail;
    }
}
