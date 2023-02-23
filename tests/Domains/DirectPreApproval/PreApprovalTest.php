<?php

namespace PagSeguro\Tests;

use PagSeguro\Domains\DirectPreApproval\PreApproval;
use PHPUnit\Framework\TestCase;

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
