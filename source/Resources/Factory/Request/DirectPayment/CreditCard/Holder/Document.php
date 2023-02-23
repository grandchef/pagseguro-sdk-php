<?php

namespace PagSeguro\Resources\Factory\Request\DirectPayment\CreditCard\Holder;

use PagSeguro\Enum\Properties\Current;

/** Class Document
 */
class Document
{
    /**
     * @var \PagSeguro\Domains\Document
     */
    private $holder;

    /**
     * Document constructor.
     */
    public function __construct($holder)
    {
        $this->holder = $holder;
    }

    /**
     * @return \PagSeguro\Domains\Document
     */
    public function instance(\PagSeguro\Domains\Document $document)
    {
        $this->holder->setDocuments($document);

        return $this->holder;
    }

    /**
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
