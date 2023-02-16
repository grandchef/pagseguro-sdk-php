<?php

namespace PagSeguro\Tests;

use PHPUnit\Framework\TestCase;
use PagSeguro\Domains\DirectPreApproval\Plan;

class PlanTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new Plan();
    }

    public function testConstructor()
    {
        $this->assertInstanceOf(Plan::class, $this->obj);
    }
}
