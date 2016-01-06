<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 1/6/16
 * Time: 9:46 PM
 */

namespace tests\Zemiel\DataProvider;

use Zemiel\DataProvider\MySQLDbDataProvider as MySql;

class MySQLDbDataProvider extends \PHPUnit_Framework_TestCase
{
    /**
     *
     */
    public function testConnectToDataBase()
    {
        $db = MySql::getInstance();
    }
}