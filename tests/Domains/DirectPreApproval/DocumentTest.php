<?php

namespace GrandChef\Tests;

use PHPUnit\Framework\TestCase;
use GrandChef\Domains\DirectPreApproval\Document;

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
