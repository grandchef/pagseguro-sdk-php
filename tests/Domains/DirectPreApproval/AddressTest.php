<?php

namespace PagSeguro\Tests;

use PagSeguro\Domains\DirectPreApproval\Address;
use PHPUnit\Framework\TestCase;

class AddressTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new Address();
    }

    public function testConstructor()
    {
        $this->assertInstanceOf(Address::class, $this->obj);
    }

    public function testParametersThatCanBeNull()
    {
        $this->assertNull($this->obj->complement);
    }
}
