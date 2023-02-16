<?php

namespace GrandChef\Tests;

use PHPUnit\Framework\TestCase;
use GrandChef\Domains\DirectPreApproval\Address;

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
