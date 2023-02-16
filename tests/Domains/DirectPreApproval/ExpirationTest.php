<?php

namespace GrandChef\Tests;

use PHPUnit\Framework\TestCase;
use GrandChef\Domains\DirectPreApproval\Expiration;

class ExpirationTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new Expiration();
    }

    public function testConstructor()
    {
        $this->assertInstanceOf(Expiration::class, $this->obj);
    }
}
