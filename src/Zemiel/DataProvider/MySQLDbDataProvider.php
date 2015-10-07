<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 10/7/15
 * Time: 11:01 PM
 */

namespace Zemiel\DataProvider;


class MySQLDbDataProvider
{
    protected static $db;

    protected function getDb()
    {
        if (self::$db == null) {
            self::$db = new \PDO('mysql:host=localhost;dbname=Ideas', 'root', 'root');
        }

        return self::$db;
    }
}