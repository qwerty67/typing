<?php


namespace App\Structures\Abstracts;


abstract class ResolverAbstract
{
    /**
     * @param $data
     * @param $context
     * @param $selectionField
     * @return mixed
     */
    abstract public function endpointResolver($data, $context, $selectionField);
}