<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 10/7/15
 * Time: 11:01 PM
 */

namespace Zemiel\DataProvider;

use MongoDB\Driver\Manager;
use MongoDB\Driver\BulkWrite;
use MongoDB\Driver\Query;
use MongoDB\Driver\ReadPreference;
use MongoDB\Driver\Command;
use MongoDB\Driver\WriteConcern;

class MongoDbDataProvider
{
    /**
     * @var \MongoDB
     */
    protected static $manager;
    protected static $writeConcern;
    protected static $readPreference;
    protected static $bulk;
    protected static $query;
    protected static $command;

    protected static $uri = 'mongodb://localhost:27017';
    protected static $preference = [
        [],
        [],
        [],
    ];

    /**
     * MySQLDbDataProvider constructor
     *
     * @protected
     */
    protected function __construct()
    {
        self::setManager();
        self::setWriteConcern();
        self::setReadPreference();
        self::setBulk();
    }

    /**
     * setManager
     *
     * setting MongoDB Driver Manager
     *
     * @protected
     */
    protected function setManager()
    {
        self::$manager = new Manager(self::$uri);
    }

    /**
     * setWriteConcern
     *
     * setting MongoDB WriteConcern
     *
     * @protected
     */
    protected function setWriteConcern()
    {
        self::$writeConcern = new WriteConcern(WriteConcern::MAJORITY, 1000);
    }

    /**
     * setReadPreference
     *
     * setting MongoDB ReadPreference
     *
     * @protected
     */
    protected function setReadPreference()
    {
        self::$readPreference = new ReadPreference(ReadPreference::RP_SECONDARY_PREFERRED, self::$preference);
    }

    /**
     * setBulk
     *
     * setting MongoDB BulkWrite
     *
     * @protected
     */
    protected function setBulk()
    {
        self::$bulk = new BulkWrite(['ordered' => true]);
    }

    /**
     * setQuery
     *
     * setting MongoDB Query
     *
     * @protected
     * @param array $array
     */
    protected function setQuery($array = [])
    {
        self::$query = new Query($array);
    }

    /**
     * setCommand
     *
     * setting MongoDb Command
     *
     * @protected
     * @param array $array
     */
    protected function setCommand($array = [])
    {
        self::$command = new Command($array);
    }

    /**
     * getInstance
     *
     * getting Instance This Class
     *
     * @static
     * @return \MongoDB|MongoDbDataProvider
     */
    public static function getInstance()
    {
        return new self();
    }

    /**
     * getManager
     *
     * getting MongoDB Manager
     *
     * @return \MongoDB
     */
    public function getManager()
    {
        return self::$manager;
    }

    /**
     * getWriteConcern
     *
     * getting WriteConcern
     *
     * @return mixed
     */
    public function getWriteConcern()
    {
        return self::$writeConcern;
    }

    /**
     * getReadPreference
     *
     * getting ReadPreference
     *
     * @return mixed
     */
    public function getReadPreference()
    {
        return self::$readPreference;
    }

    /**
     * getBulk
     *
     * getting Bulk
     *
     * @return mixed
     */
    public function getBulk()
    {
        return self::$bulk;
    }

    /**
     * getQuery
     *
     * getting Query
     *
     * @param array $array
     * @return mixed
     */
    public function getQuery($array = [])
    {
        self::setQuery($array);
        return self::$query;
    }

    public function gatCommand($array = [])
    {
        self::setCommand($array);
        return self::$command;
    }
}