<?php

namespace PagSeguro\Domains\Requests\DirectPayment\CreditCard;

/** Domain request class of Token
 *
 */
trait Token
{
    private $token;

    public function getToken()
    {
        return $this->token;
    }

    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }
}
