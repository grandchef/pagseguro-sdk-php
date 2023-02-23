<?php

namespace PagSeguro\Resources\Factory\Sender;

use PagSeguro\Enum\Properties\Current;

/** Class Document
 */
class Document
{
    /**
     * @var \PagSeguro\Domains\Document
     */
    private $sender;

    /**
     * Document constructor.
     */
    public function __construct($sender)
    {
        $this->sender = $sender;
    }

    /**
     * @return \PagSeguro\Domains\Document
     */
    public function instance(\PagSeguro\Domains\Document $document)
    {
        $this->sender->setDocuments($document);

        return $this->sender;
    }

    /**
     * @return \PagSeguro\Domains\Document|Document
     */
    public function withArray($array)
    {
        $properties = new Current;
        $document = new \PagSeguro\Domains\Document();
        $document->setType($array[$properties::DOCUMENT_TYPE])
            ->setIdentifier($array[$properties::DOCUMENT_VALUE]);
        $this->sender->setDocuments($document);

        return $this->sender;
    }

    /**
     * @return \PagSeguro\Domains\Document
     */
    public function withParameters($type, $identifier)
    {
        $document = new \PagSeguro\Domains\Document();
        $document->setType($type)
            ->setIdentifier($identifier);
        $this->sender->setDocuments($document);

        return $this->sender;
    }
}
