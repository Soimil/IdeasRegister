<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 9/2/15
 * Time: 10:26 PM
 */

namespace Module\Service;


abstract class AbstractService
{
    protected $name;
    protected $mapper;

    /**
     * construct
     *
     * @param null $name
     */
    public function __construct($name = null)
    {
        if($name) {
            $this->setMapperName($name);
        }
    }

    /**
     * setting mapper name
     *
     * @param $name
     * @return $this
     */
    public function setMapperName($name)
    {
        if (!(is_string($name)) || strlen($name) === 0) {
            throw new \InvalidArgumentException('Mapper $name must be string and can\'t by empty.');
        }

        $this->name = $name;
        return $this;
    }

    /**
     * getting mapper name
     *
     * @return null|string
     */
    public function getMapperName()
    {
        return $this->name;
    }

    /**
     * setting mapper
     * @param $mapper
     */
    public function setMapper($mapper)
    {
        $this->mapper = $mapper;
    }

    /**
     * getting mapper
     *
     * @return null|object
     */
    public function getMapper()
    {
        return $this->mapper;
    }
}