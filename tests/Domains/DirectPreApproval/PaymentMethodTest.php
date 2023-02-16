<?php

namespace GrandChef\Tests;

use PHPUnit\Framework\TestCase;
use GrandChef\Domains\DirectPreApproval\PaymentMethod;

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
