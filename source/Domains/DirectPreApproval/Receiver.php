<?php

namespace PagSeguro\Domains\DirectPreApproval;

/** Class Receiver
 *
 */
class Receiver
{
    public $email;

    /**
     * @return $this
     */
    public function withParameters($email)
    {
        $this->email = $email;

        return $this;
    }
}
