<?php

/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 8/19/15
 * Time: 9:26 PM
 */
class AbstractEntity
{
    private $_entityData = array();

    public function __construct($data = array())
    {
        if ($data != null) {
            foreach ($data as $key => $val) {
                $this->_entityData[$key] = $val;
            }
        }
    }
}