<?php

namespace PagSeguro\Tests;

use PagSeguro\Domains\DirectPreApproval\Item;
use PHPUnit\Framework\TestCase;

class ItemTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new Item();
    }

    public function testConstructor()
    {
        $this->assertInstanceOf(Item::class, $this->obj);
    }

    public function testParametersThatCanBeNull()
    {
        $this->assertNull($this->obj->weight);
        $this->assertNull($this->obj->shippingCost);
    }
}
