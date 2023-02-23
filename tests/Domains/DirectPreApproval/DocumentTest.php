<?php

namespace PagSeguro\Tests;

use PagSeguro\Domains\DirectPreApproval\Document;
use PHPUnit\Framework\TestCase;

class DocumentTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new Document();
    }

    public function testConstructor()
    {
        $this->assertInstanceOf(Document::class, $this->obj);
    }
}
