<?php

namespace PagSeguro\Domains\Requests;

use PagSeguro\Helpers\InitializeObject;

trait Metadata
{
    private $metadata;

    public function addMetadata()
    {
        $this->metadata = InitializeObject::Initialize(
            $this->metadata,
            new \PagSeguro\Resources\Factory\Request\Metadata()
        );

        return $this->metadata;
    }

    public function setMetadata($metadata)
    {
        if (is_array($metadata)) {
            $arr = [];
            foreach ($metadata as $key => $metadataItem) {
                if ($metadataItem instanceof \PagSeguro\Domains\Metadata) {
                    $arr[$key] = $metadataItem;
                } else {
                    if (is_array($metadata)) {
                        $arr[$key] = new \PagSeguro\Domains\Metadata($metadataItem);
                    }
                }
            }
            $this->metadata = $arr;
        }
    }

    public function getMetadata()
    {
        return current($this->metadata);
    }

    public function metadataLenght()
    {
        return (! is_null($this->metadata)) ? count(current($this->metadata)) : 0;
    }
}
