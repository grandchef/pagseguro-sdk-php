<?php

namespace PagSeguro\Domains\Requests\Adapter\DirectPayment;

use PagSeguro\Domains\Requests\DirectPayment\CreditCard\Holder\Document;
use PagSeguro\Domains\Requests\DirectPayment\CreditCard\Holder\Phone;

class Holder
{
    use Document;
    use Phone;

    private $holder;

    public function __construct($holder)
    {
        $this->holder = $holder;
    }

    /**
     * @return mixed
     */
    public function getBirthDate()
    {
        return $this->holder->getBirthDate();
    }

    /**
     * @param  mixed  $birthdate
     */
    public function setBirthDate($birthdate)
    {
        $this->holder->setBirthDate($birthdate);
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->holder->getName();
    }

    /**
     * @param  mixed  $name
     */
    public function setName($name)
    {
        $this->holder->setName($name);
    }
}
