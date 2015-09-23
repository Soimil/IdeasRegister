<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 9/2/15
 * Time: 10:26 PM
 */

namespace Zemiel\Service;

use Zemiel\Mapper\AbstractMapper;

abstract class AbstractService
{
    protected $currentMapper;
    protected $mappers = [];

    /**
     * construct
     * @param null|AbstractMapper $mapper
     */
    public function __construct(AbstractMapper $mapper = null)
    {
        if ($mapper && !(is_object($mapper))) {
            throw new \InvalidArgumentException('Mapper must by object');
        }
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

        if (array_key_exists($mapperName, $this->mappers)) {
            $this->currentMapper = $this->mappers[$mapperName];
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
     * @param object|AbstractMapper $mapper
     */
    public function addMapper(AbstractMapper $mapper)
    {
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