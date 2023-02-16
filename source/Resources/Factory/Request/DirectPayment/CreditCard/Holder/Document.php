<?php

namespace PagSeguro\Resources\Factory\Request\DirectPayment\CreditCard\Holder;

use PagSeguro\Enum\Properties\Current;

/** Class Document
 * @package PagSeguro\Resources\Factory
 */
class Document
{

    /**
     * @var \PagSeguro\Domains\Document
     */
    private $holder;

    /**
     * Document constructor.
     * @param $holder
     */
    public function __construct($holder)
    {
        $this->holder = $holder;
    }

    /**
     * @param \PagSeguro\Domains\Document $document
     * @return \PagSeguro\Domains\Document
     */
    public function instance(\PagSeguro\Domains\Document $document)
    {
        $this->holder->setDocuments($document);
        return $this->holder;
    }

    /**
     * @param $array
     * @return \PagSeguro\Domains\Document
     */
    public function withArray($array)
    {
        $properties = new Current;
        $document = new \PagSeguro\Domains\Document();
        $document->setType($array[$properties::DOCUMENT_TYPE])
            ->setIdentifier($array[$properties::DOCUMENT_VALUE]);
        $this->holder->setDocuments($document);
        return $this->holder;
    }

    /**
     * @param $type
     * @param $identifier
     * @return \PagSeguro\Domains\Document
     */
    public function withParameters($type, $identifier)
    {
        $document = new \PagSeguro\Domains\Document();
        $document->setType($type)
            ->setIdentifier($identifier);
        $this->holder->setDocuments($document);
        return $this->holder;
    }
}
