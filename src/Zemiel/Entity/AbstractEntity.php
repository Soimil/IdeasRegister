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
     * construct function
     *
     * @param array $data
     */
    public function __construct($data = null)
    {
        if($data != null) {
            $this->setEntityData($data);
        }

    }

    /**
     * getting class properties
     *
     * @return array
     */
    public function getProperties()
    {
        $reflect = new \ReflectionClass($this);
        $properties = $reflect->getProperties(\ReflectionProperty::IS_PROTECTED);

        foreach ($properties as $property) {
            $this->entityProperties[] = $property->getName();
        }

        return $this->entityProperties;
    }

    /**
     * getting entity data
     *
     * @return array
     */
    public function getEntityData()
    {
        return $this->entityData;
    }

    /**
     * setting entity data
     *
     * @param array $data
     */
    public function setEntityData($data = null)
    {
        $properties = $this->getProperties();

        if ($data != null) {
            foreach ($data as $key => $val) {

                if(in_array($key, $properties)) {
                    $this->entityData[$key] = $val;
                }

            }
        }
    }
}