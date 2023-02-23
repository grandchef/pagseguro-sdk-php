<?php

namespace PagSeguro\Tests;

use PagSeguro\Domains\DirectPreApproval\Phone;
use PHPUnit\Framework\TestCase;

class PhoneTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new Phone();
    }

    public function testConstructor()
    {
        $this->assertInstanceOf(Phone::class, $this->obj);
    }
}
