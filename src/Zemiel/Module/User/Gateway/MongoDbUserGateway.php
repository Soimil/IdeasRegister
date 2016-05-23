<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 9/23/15
 * Time: 10:21 PM
 */

namespace Zemiel\Module\User\Gateway;

use Zemiel\Gateway\MongoDbGateway;

class MongoDbUserGateway extends MongoDbGateway
{
    protected $name = "MongoDbUserGateway";

}