<?php

namespace PagSeguro\Tests;

use PHPUnit\Framework\TestCase;
use PagSeguro\Domains\DirectPreApproval\PreApproval;

class PreApprovalTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new PreApproval();
    }

    public function testConstructor()
    {
        $this->assertInstanceOf(PreApproval::class, $this->obj);
    }
}
