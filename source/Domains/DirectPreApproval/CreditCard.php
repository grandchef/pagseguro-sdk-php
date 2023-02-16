<?php

namespace PagSeguro\Domains\DirectPreApproval;

/** Class CreditCard
 *
 * @package PagSeguro\Domains\DirectPreApproval
 */
class CreditCard
{
    /**
     * @var
     */
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

    /**
     * @param $token
     */
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