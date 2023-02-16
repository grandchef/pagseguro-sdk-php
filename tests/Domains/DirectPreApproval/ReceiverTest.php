<?php

namespace GrandChef\Tests;

use PHPUnit\Framework\TestCase;
use GrandChef\Domains\DirectPreApproval\Receiver;

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
