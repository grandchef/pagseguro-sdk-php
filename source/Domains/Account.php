<?php

namespace PagSeguro\Domains;

/** Class Account
 * @package PagSeguro\Domains
 */
class Account
{
    /**
     * @var
     */
    private $publicKey;

    /**
     * @return mixed
     */
    public function getPublicKey()
    {
        return $this->publicKey;
    }

    /**
     * @param mixed $publicKey
     */
    public function setPublicKey($publicKey)
    {
        $this->publicKey = $publicKey;
    }
}
