<?php

namespace PagSeguro\Tests;

use PagSeguro\Domains\DirectPreApproval\PaymentMethod;
use PHPUnit\Framework\TestCase;

class PaymentMethodTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new PaymentMethod();
    }

    public function testConstructor()
    {
        $this->assertInstanceOf(PaymentMethod::class, $this->obj);
    }
}
