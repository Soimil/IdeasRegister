<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 1/6/16
 * Time: 9:46 PM
 */

namespace tests\Zemiel\DataProvider;

use MongoDB\Driver\Exception\Exception;
use Zemiel\DataProvider\MySQLDbDataProvider as MySql;

class MySQLDbDataProvider extends \PHPUnit_Framework_TestCase
{
    /**
     * testCreate
     */
    public function testCreate()
    {
        $document = ["hello" => "world"];

        $mongoDb = MySql::getInstance();
        $manager = $mongoDb->getManager();
        $wc = $mongoDb->getWriteConcern();
        $bulk = $mongoDb->getBulk();

        $bulk->insert($document);

        try {
            $result = $manager->executeBulkWrite("db.collection", $bulk, $wc);
            var_dump($result);
        } catch (Exception $e) {
            echo $e->getMessage(), "\n";
        }
    }

    /**
     * testGetQuery
     */
    public function testGetQuery()
    {
        $mongoDb = MySql::getInstance();
        $manager = $mongoDb->getManager();

        $query = $mongoDb->getQuery();
        $rp = $mongoDb->getReadPreference();

        try {
            $cursor = $manager->executeQuery("db.collection", $query, $rp);

            foreach ($cursor as $document) {
                var_dump($document);
            }
        } catch (Exception $e) {
            echo $e->getMessage(), "\n";
        }

    }

    /**
     * testUpdate
     */
    public function testUpdate()
    {
        $filter = ["hello" => "world"];
        $update = ['$set' => ["hello" => "wonderful world"]];

        $options = ["limit" => 1, "upsert" => false];

        $mongoDb = MySql::getInstance();
        $manager = $mongoDb->getManager();
        $wc = $mongoDb->getWriteConcern();
        $bulk = $mongoDb->getBulk();

        $bulk->update($filter, $update, $options);

        try {
            $result = $manager->executeBulkWrite("db.collection", $bulk, $wc);
            var_dump($result);
        } catch (Exception $e) {
            echo $e->getMessage(), "\n";
        }
    }

    public function testDelete()
    {
        $filter = ["hello" => "world"];
        $options = ["limit" => 1];

        $mongoDb = MySql::getInstance();
        $manager = $mongoDb->getManager();
        $wc = $mongoDb->getWriteConcern();
        $bulk = $mongoDb->getBulk();

        $bulk->delete($filter, $options);

        try {
            $result = $manager->executeBulkWrite("db.collection", $bulk, $wc);
            var_dump($result);
        } catch (Exception $e) {
            echo $e->getMessage(), "\n";
        }

    }
}