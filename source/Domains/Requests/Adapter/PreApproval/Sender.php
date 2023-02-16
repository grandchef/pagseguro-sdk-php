<?php

namespace PagSeguro\Domains\Requests\Adapter\PreApproval;

use PagSeguro\Domains\Requests\Sender\Address;
use PagSeguro\Domains\Requests\Sender\Customer;
use PagSeguro\Domains\Requests\Sender\Phone;

class Sender
{
    use Address;
    use Customer;
    use Phone;

    private $sender;

    public function __construct($sender)
    {
        $this->sender = $sender;
    }
}
