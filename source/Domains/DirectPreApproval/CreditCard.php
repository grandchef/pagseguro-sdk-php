<?php

namespace PagSeguro\Domains\DirectPreApproval;

/** Class CreditCard
 *
 */
class CreditCard
{
    public $token;

    /**
     * @var Holder
     */
    public $holder;

    /**
     * CreditCard constructor.
     */
    public function __construct()
    {
        $this->holder = new Holder();
    }

    public function setToken($token)
    {
        $this->token = $token;
    }

    /**
     * @return Holder
     */
    public function setHolder()
    {
        return $this->holder;
    }
}
