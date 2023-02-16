<?php

namespace PagSeguro\Tests;

use PHPUnit\Framework\TestCase;
use PagSeguro\Domains\DirectPreApproval\Expiration;

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
