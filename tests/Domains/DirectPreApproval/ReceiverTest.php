<?php

namespace PagSeguro\Tests;

use PagSeguro\Domains\DirectPreApproval\Receiver;
use PHPUnit\Framework\TestCase;

class ReceiverTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new Receiver();
    }

    public function testConstructor()
    {
        $this->assertInstanceOf(Receiver::class, $this->obj);
    }
}
