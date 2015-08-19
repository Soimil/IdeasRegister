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
    private $propertiesEntity = [];

    public function __construct($data = [])
    {

        if ($data != null) {
            foreach ($data as $key => $val) {

                if(in_array($this->propertiesEntity, $key)) {
                    $this->entityData[$key] = $val;
                }

            }
        }
    }

    public function getProperties()
    {
        $reflect = new ReflectionClass($this);
        $properties   = $reflect->getProperties(ReflectionProperty::IS_PROTECTED);

        foreach ($properties as $property) {
            $this->propertiesEntity[] = $property->getName();
        }

        return $this->propertiesEntity;
    }
}