<?php

namespace PagSeguro\Domains\Requests\Adapter\DirectPayment;

use PagSeguro\Domains\Requests\Sender\Customer;
use PagSeguro\Domains\Requests\Sender\Document;
use PagSeguro\Domains\Requests\Sender\Hash;
use PagSeguro\Domains\Requests\Sender\Ip;
use PagSeguro\Domains\Requests\Sender\Phone;

class Sender
{
    use Customer;
    use Document;
    use Hash;
    use Ip;
    use Phone;

    private $sender;

    public function __construct($sender)
    {
        $this->sender = $sender;
    }
}
