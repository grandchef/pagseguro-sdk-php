<?php

namespace PagSeguro\Tests;

use PHPUnit\Framework\TestCase;
use PagSeguro\Domains\DirectPreApproval\BillingAddress;

class BillingAddressTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new BillingAddress();
    }

    public function testConstructor()
    {
        $this->assertInstanceOf(BillingAddress::class, $this->obj);
    }

    public function testParametersThatCanBeNull()
    {
        $this->assertNull($this->obj->complement);
    }
}
