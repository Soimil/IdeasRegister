<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 9/2/15
 * Time: 10:26 PM
 */

namespace Zemiel\Module\Service;


abstract class AbstractService
{
    protected $name;
    protected $currentMapper;
    protected $mappers = [];

    /**
     * construct
     *
     */
    public function __construct()
    {

    }

    /**
     * setting mapper
     *
     * @param $mapperName
     * @internal param $currentMapper
     */
    public function setCurrentMapper($mapperName)
    {
       $this->currentMapper = $this->mappers[$mapperName];
    }

    /**
     * getting mapper
     *
     * @return null|object
     */
    public function getCurrentMapper()
    {
        return $this->currentMapper;
    }

    public function addMapper($mapper)
    {
        $this->mappers[$mapper->getName()] = $mapper;
    }


}