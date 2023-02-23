<?php

namespace PagSeguro\Domains\Authorization;

use PagSeguro\Domains\Document;
use PagSeguro\Domains\Phone;

/** Class Partner
 *
 */
class Partner
{
    /**
     * @var string
     */
    private $name = '';

    /**
     * @var \DateTime
     */
    private $birthDate;

    /**
     * @var array
     */
    private $documents = [];

    /**
     * @var array
     */
    private $phones = [];

    /**
     * Partner constructor.
     *
     * @param  string  $name
     * @param  \DateTime  $birthDate
     * @param  Document  $document
     * @param  Phone  $phone
     */
    public function __construct(
        $name = null,
        \DateTime $birthDate = null,
        Document $document = null,
        Phone $phone = null
    ) {
        $this->name = $name;
        $this->birthDate = date('Y-m-d', $birthDate->getTimestamp());
        if (isset($document)) {
            $this->addDocuments($document);
        }
        if (isset($phone)) {
            $this->addPhones($phone);
        }
    }

    /**
     * @return array
     */
    public function addDocuments(Document $document)
    {
        $this->documents[] = $document;

        return $this->documents;
    }

    /**
     * @return array
     */
    public function addPhones(Phone $phone)
    {
        try {
            if (! $phone->getType()) {
                throw new \InvalidArgumentException('Phone Type is required');
            }
        } catch (\InvalidArgumentException $exception) {
            exit($exception);
        }
        $this->phones[] = $phone;

        return $this->phones;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * @return null|string
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @return array
     */
    public function getPhones()
    {
        return $this->phones;
    }
}
