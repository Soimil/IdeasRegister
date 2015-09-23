<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 9/23/15
 * Time: 10:21 PM
 */

namespace Zemiel\Module\User\Mapper;

use Zemiel\Mapper\AbstractMapper;

class UserMapper extends  AbstractMapper
{
    public function gatName()
    {
        return 'UserMapper';
    }
}