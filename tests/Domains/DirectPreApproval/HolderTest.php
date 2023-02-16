<?php

namespace GrandChef\Tests;

use PHPUnit\Framework\TestCase;
use GrandChef\Domains\DirectPreApproval\Holder;

class HolderTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new Holder();
    }

    public function testConstructor()
    {
        $this->assertInstanceOf(Holder::class, $this->obj);
    }
}
