<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 9/3/15
 * Time: 10:14 PM
 */

namespace Zemiel\Mapper;

abstract class AbstractMapper
{
    protected $name;

    /**
     * setting Mapper name
     * 
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        if (!(is_string($name)) || strlen($name) === 0) {
            throw new \InvalidArgumentException('Mapper name can\'t by empty and must be string.');
        }

        $this->name = $name;
        return $this;
    }

    /**
     * getting mapper name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}