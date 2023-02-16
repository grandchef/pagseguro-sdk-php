<?php

namespace GrandChef\Tests;

use PHPUnit\Framework\TestCase;
use GrandChef\Domains\DirectPreApproval\Sender;

class SenderTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new Sender();
    }

    public function testConstructor()
    {
        $this->assertInstanceOf(Sender::class, $this->obj);
    }
}
