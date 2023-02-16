<?php

namespace PagSeguro\Domains\Requests\Adapter;

use PagSeguro\Domains\Requests\Sender\Customer;
use PagSeguro\Domains\Requests\Sender\Document;
use PagSeguro\Domains\Requests\Sender\Phone;

class Sender
{
    use Customer;
    use Document;
    use Phone;

    private $sender;

    public function __construct($sender)
    {
        $this->sender = $sender;
    }
}
