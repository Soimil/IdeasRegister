<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 10/7/15
 * Time: 11:01 PM
 */

namespace Zemiel\DataProvider;

use \MongoDB\Driver\Manager;
use \MongoDB\Driver\BulkWrite;
use \MongoDB\Driver\Query;
use \MongoDB\Driver\ReadPreference;
use \MongoDB\Driver\WriteConcern;
use \MongoDB\Collection;

class MySQLDbDataProvider
{
    /**
     * @var \MongoDB
     */
    protected static $manager;
    protected static $writeConcern;
    protected static $readPreference;
    protected static $bulk;
    protected static $query;

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
        self::setQuery();
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
        self::$bulk = new BulkWrite();
    }

    /**
     * setQuery
     *
     * setting MongoDB Query
     *
     * @protected
     */
    protected function setQuery()
    {
        self::$query = new Query([]);
    }

    /**
     * getInstance
     *
     * getting Instance This Class
     *
     * @static
     * @return \MongoDB|MySQLDbDataProvider
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
     * @return mixed
     */
    public function getQuery()
    {
        return self::$query;
    }
}