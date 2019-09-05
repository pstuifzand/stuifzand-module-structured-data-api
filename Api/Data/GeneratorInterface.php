<?php

namespace Stuifzand\StructuredDataApi\Api\Data;

interface GeneratorInterface
{
    /**
     * @param mixed $object
     * @return array
     */
    public function generate($object): array;
}
