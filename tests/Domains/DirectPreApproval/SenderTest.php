<?php

namespace PagSeguro\Tests;

use PagSeguro\Domains\DirectPreApproval\Sender;
use PHPUnit\Framework\TestCase;

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
