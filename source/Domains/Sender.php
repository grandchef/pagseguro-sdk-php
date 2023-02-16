<?php

namespace PagSeguro\Domains;

/** Class Sender
 * @package PagSeguro\Domains
 */
class Sender
{

    /**
     * @var
     */
    private $name;
    /**
     * @var
     */
    private $email;
    /**
     * @var
     */
    private $phone;
    /**
     * @var
     */
    private $documents;

    /**
     * Sender constructor.
     */
    public function __construct()
    {
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Sender
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Sender
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return integer
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param Phone $phone
     * @return Sender
     */
    public function setPhone(Phone $phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * @param Document $document
     * @return $this
     */
    public function setDocuments(Document $document)
    {
        $this->documents[] = $document;
        return $this;
    }

    /***
     * Add a document for Sender object
     * @param String $type
     * @param String $value
     */
    public function addDocument($type, $value)
    {
        if ($type && $value) {
            if (count($this->documents) == 0) {
                $document = new Document($type, $value);
                $this->documents[] = $document;
            }
        }
    }
}
