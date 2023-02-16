<?php

namespace PagSeguro\Domains\Requests\Sender;

trait Customer
{
    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->sender->email;
    }

    /**
     * @param mixed $email
     * @return Customer
     */
    public function setEmail($email)
    {
        $this->sender->setEmail($email);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->sender->name;
    }

    /**
     * @param mixed $name
     * @return Customer
     */
    public function setName($name)
    {
        $this->sender->setName($name);
        return $this;
    }
}
