<?php

namespace PagSeguro\Domains;

/** Class Account
 */
class Account
{
    private $publicKey;

    /**
     * @return mixed
     */
    public function getPublicKey()
    {
        return $this->publicKey;
    }

    /**
     * @param  mixed  $publicKey
     */
    public function setPublicKey($publicKey)
    {
        $this->publicKey = $publicKey;
    }
}
