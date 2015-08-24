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
    public function __construct(array $data = null)
    {
        if ($data) {
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
        if (empty($this->entityProperties)) {
            $reflect = new \ReflectionClass($this);
            $properties = $reflect->getProperties(\ReflectionProperty::IS_PROTECTED);

            foreach ($properties as $property) {
                $this->entityProperties[] = $property->getName();
            }
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
        $properties = $this->getProperties();

        $array = [];

        foreach ($properties as $property) {
            $array[$property] = $this->$property;
        }

        return $array;
    }

    /**
     * setting entity data
     *
     * @param array $data
     */
    public function setEntityData(array $data = null)
    {
        $properties = $this->getProperties();

        if ($data) {
            foreach ($properties as $property) {
                if (isset($data[$property])) {
                    $this->$property = $data[$property];
                }
            }
        }
    }
}