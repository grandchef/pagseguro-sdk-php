<?php

namespace PagSeguro\Tests;

use PagSeguro\Domains\DirectPreApproval\Plan;
use PHPUnit\Framework\TestCase;

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
