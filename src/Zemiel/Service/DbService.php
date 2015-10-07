<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 10/7/15
 * Time: 10:48 PM
 */

namespace Zemiel\Service;


class DbService
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