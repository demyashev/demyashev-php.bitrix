<?php

namespace Demyashev\Bitrix;

class Model {

    /**
     * @param \stdClass|array $object
     *
     * @throws \Exception
     */
    public function __construct($object)
    {
        foreach ($object as $field => $value) {
            $field = strtolower($field);
            $methodUppercaseWords = ucwords($field, '_');
            $method = 'set' . str_replace('_', '', $methodUppercaseWords);

            $valueType = gettype($value);

            switch ($valueType) {
                case 'boolean':
                    $value = (bool) $value;
                    break;

                case 'integer':
                    $value = (int) $value;
                    break;

                case 'string':
                    $value = (string) $value;
                    break;

                case 'NULL':
                    $value = null;
                    break;

                default:
                    throw new \Exception('Unsupported data type');
            }

            if (method_exists($this, $method) && $value) {
                $this->{$method}($value);
            }
        }
    }
}