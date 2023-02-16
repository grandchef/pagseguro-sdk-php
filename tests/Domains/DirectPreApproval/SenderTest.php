<?php

namespace PagSeguro\Tests;

use PHPUnit\Framework\TestCase;
use PagSeguro\Domains\DirectPreApproval\Sender;

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
