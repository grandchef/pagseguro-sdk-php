<?php

namespace PagSeguro\Domains\Requests\Sender;

trait Ip
{
    /**
     * @return mixed
     */
    public function getIp()
    {
        return $this->sender->ip;
    }

    /**
     * @param mixed $email
     * @return Customer
     */
    public function setIp($ip)
    {
        $this->sender->setIp($ip);
        return $this;
    }
}
