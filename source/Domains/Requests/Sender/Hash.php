<?php

namespace PagSeguro\Domains\Requests\Sender;

trait Hash
{
    /**
     * @return mixed
     */
    public function getHash()
    {
        return $this->sender->hash;
    }

    /**
     * @param mixed $email
     * @return Customer
     */
    public function setHash($hash)
    {
        $this->sender->setHash($hash);
        return $this;
    }
}
