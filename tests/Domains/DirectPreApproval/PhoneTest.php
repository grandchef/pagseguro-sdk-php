<?php

namespace GrandChef\Tests;

use PHPUnit\Framework\TestCase;
use GrandChef\Domains\DirectPreApproval\Phone;

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
