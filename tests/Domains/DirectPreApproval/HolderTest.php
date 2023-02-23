<?php

namespace PagSeguro\Tests;

use PagSeguro\Domains\DirectPreApproval\Holder;
use PHPUnit\Framework\TestCase;

class HolderTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new Holder();
    }

    public function testConstructor()
    {
        $this->assertInstanceOf(Holder::class, $this->obj);
    }
}
