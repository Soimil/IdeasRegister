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

    public function __construct($listProperties = [], $data = [])
    {
        if ($listProperties != null && $data != null) {
            foreach ($data as $key => $val) {

                if(isset($listProperties[$key])) {
                    $this->entityData[$key] = $val;
                }

            }
        }
    }
}