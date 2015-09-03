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
     * @param string $mapperName
     * @internal param $currentMapper
     */
    public function setCurrentMapper($mapperName)
    {
        if (!(is_string($mapperName)) || strlen($mapperName) === 0) {
            throw new \InvalidArgumentException('Mapper name can\'t by empty and must by string.');
        }
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

    /**
     * agging mapper object to mappers
     *
     * @param object $mapper
     */
    public function addMapper($mapper)
    {
        if (!is_object($mapper)) {
            throw new \InvalidArgumentException('Mapper can\'t by empty and must by mapper object.');
        }
        $this->mappers[$mapper->getName()] = $mapper;
    }

}