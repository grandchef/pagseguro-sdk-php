<?php

namespace PagSeguro\Resources\Factory\Request;

use PagSeguro\Enum\Properties\Current;

/** Class Metadata
 * @package PagSeguro\Resources\Factory\Request
 */
class Metadata
{
    private $metadata;

    public function __construct()
    {
        $this->metadata = [];
    }

    public function instance(\PagSeguro\Domains\Metadata $metadata)
    {
        return $metadata;
    }

    public function withArray($array)
    {
        $properties = new Current;

        $metadata = new \PagSeguro\Domains\Metadata();
        $metadata->setKey($array[$properties::METADATA_ITEM_KEY])
            ->setValue($array[$properties::METADATA_ITEM_VALUE])
            ->setGroup($array[$properties::METADATA_ITEM_GROUP]);

        array_push($this->metadata, $metadata);
        return $this->metadata;
    }

    public function withParameters(
        $key,
        $value,
        $group = null
    ) {
        $metadata = new \PagSeguro\Domains\Metadata();
        $metadata->setKey($key)
            ->setValue($value)
            ->setGroup($group);
        array_push($this->metadata, $metadata);
        return $this->metadata;
    }
}
