<?php

/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 8/19/15
 * Time: 9:26 PM
 */
namespace Zemiel\Entity;

class AbstractEntity
{
    private $entityData = [];
    private $entityProperties = [];

    /**
     * @param array $data
     *
     * construct function
     */
    public function __construct($data = [])
    {

        $properties = $this->getProperties();

        if ($data != null) {
            foreach ($data as $key => $val) {

                if(in_array($properties, $key)) {
                    $this->entityData[$key] = $val;
                }

            }
        }
    }

    /**
     * @return array
     *
     * getting class properties
     */
    public function getProperties()
    {
        $reflect = new ReflectionClass($this);
        $properties = $reflect->getProperties(ReflectionProperty::IS_PROTECTED);

        foreach ($properties as $property) {
            $this->entityProperties[] = $property->getName();
        }

        return $this->entityProperties;
    }
}