<?php

namespace GrandChef\Tests;

use PHPUnit\Framework\TestCase;
use GrandChef\Domains\DirectPreApproval\Plan;

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
