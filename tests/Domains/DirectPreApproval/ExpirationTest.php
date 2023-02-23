<?php

namespace PagSeguro\Tests;

use PagSeguro\Domains\DirectPreApproval\Expiration;
use PHPUnit\Framework\TestCase;

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
