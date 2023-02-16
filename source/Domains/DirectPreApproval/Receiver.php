<?php

namespace PagSeguro\Domains\DirectPreApproval;

/** Class Receiver
 *
 * @package PagSeguro\Domains\DirectPreApproval
 */
class Receiver
{
    /**
     * @var
     */
    public $email;

    /**
     * @param $email
     *
     * @return $this
     */
    public function withParameters($email)
    {
        $this->email = $email;

        return $this;
    }
}