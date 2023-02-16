<?php

namespace PagSeguro\Resources\Factory;

use PagSeguro\Enum\Properties\Current;

/** Class Document
 * @package PagSeguro\Resources\Factory
 */
class Document
{

    /**
     * @var \PagSeguro\Domains\Document
     */
    private $document;

    /**
     * Document constructor.
     */
    public function __construct()
    {
        $this->document = new \PagSeguro\Domains\Document();
    }

    /**
     * @param \PagSeguro\Domains\Document $document
     * @return \PagSeguro\Domains\Document
     */
    public function instance(\PagSeguro\Domains\Document $document)
    {
        return $document;
    }

    /**
     * @param $array
     * @return \PagSeguro\Domains\Document|Document
     */
    public function withArray($array)
    {
        $properties = new Current();
        $this->document->setType($array[$properties::DOCUMENT_TYPE])
            ->setIdentifier($array[$properties::DOCUMENT_VALUE]);
        return $this->document;
    }

    /**
     * @param $type
     * @param $identifier
     * @return \PagSeguro\Domains\Document
     */
    public function withParameters($type, $identifier)
    {
        $this->document->setType($type)
            ->setIdentifier($identifier);
        return $this->document;
    }
}
