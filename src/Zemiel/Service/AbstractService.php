<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 9/2/15
 * Time: 10:26 PM
 */

namespace Zemiel\Service;

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
     * setting current mapper
     *
     * @param string $mapperName
     * @internal param $currentMapper
     */
    public function setCurrentMapper($mapperName)
    {
        if (!(is_string($mapperName)) || preg_match('/\s/', $mapperName) > 0 || strlen($mapperName) === 0) {
            throw new \InvalidArgumentException('Mapper name can\'t by empty and must by string.');
        }

        if (!$this->mappers) {
            throw new \InvalidArgumentException('There is no set yet any mappers');
        }

        foreach ($this->mappers as $mapper) {
            if ($mapper->getName() == $mapperName) {
                $this->currentMapper = $mapper;
            }
        }

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

    /**
     * getting names all setting mappers
     *
     * @return string
     */
    public function getMappersSetNames()
    {
        if (!$this->mappers) {
            throw new \InvalidArgumentException('There is no set yet any mappers');
        }

        $names = '';
        foreach ($this->mappers as $mapper) {
            $names .= $mapper->getName() . ', ';
        }

        return substr($names, 0, -2);
    }

}