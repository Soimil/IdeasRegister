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
    /**
     * @var \MongoDB
     */
    protected static $db;

    /**
     * @var array
     */
    protected static $options = [
        'journal' => true,
        'readPreference' => 'secondary',
    ];

    protected static $uri = 'mongodb://localhost/';

    /**
     * MySQLDbDataProvider constructor.
     */
    protected function __construct()
    {
        $m = new \MongoClient(self::$uri, self::$options);
        self::$db = $m->ideas_register;
        return self::$db;
    }

    /**
     * @return \MongoDB|MySQLDbDataProvider
     */
    public static function getInstance()
    {
        return self::$db ? self::$db : new self();
    }

}