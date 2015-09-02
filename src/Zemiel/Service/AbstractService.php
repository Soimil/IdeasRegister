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
     * @param $currentMapper
     */
    public function setCurrentMapper($currentMapper)
    {
        $this->mapper = $currentMapper;
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
}