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
     * getting mapper name
     * 
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}