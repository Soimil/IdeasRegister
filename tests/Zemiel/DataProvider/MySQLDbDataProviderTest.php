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
        $hannes = [
            "name"    => "Hannes",
            "nick"    => "bjori",
            "citizen" => "Iceland",
        ];
        $hayley = [
            "name"    => "Bayley",
            "nick"    => "Alien Ninja",
            "citizen" => "USA",
        ];
        $jonpall = [
            "name"    => "Jon Pall",
            "nick"    => "unknown",
            "citizen" => "Iceland",
        ];

        $mongoDb = MySql::getInstance();
        $manager = $mongoDb->getManager();
        $wc = $mongoDb->getWriteConcern();
        $bulk = $mongoDb->getBulk();

        $hannes_id  = $bulk->insert($hannes);
        $hayley_id  = $bulk->insert($hayley);
        $jonpall_id = $bulk->insert($jonpall);
//
//        $bulk->update(
//            ["_id" => $hayley_id],
//            ['$set' => ["citizen" => "Iceland"]],
//            ["limit" => 1, "upsert" => false]
//        );
//        $bulk->update(
//            ["citizen" => "Iceland"],
//            ['$set' => ["viking" => true]],
//            ["limit" => 0, "upsert" => false]
//        );
//        $bulk->update(
//            ["name" => "Chuck Norris"],
//            ['$set' => ["viking" => false]],
//            ["limit" => 1, "upsert" => true]
//        );
//        $bulk->delete(
//            ["_id" => $jonpall_id],
//            ["limit" => 1]
//        );
//        var_dump($hannes_id);
//
//        try {
//            $result = $manager->executeBulkWrite("db.collection", $bulk, $wc);
//            var_dump($result);
//        } catch (Exception $e) {
//            echo $e->getMessage(), "\n";
//        }
//
//        printf("insertedCount: %d\n", $result->getInsertedCount());
//        printf("matchedCount:  %d\n", $result->getMatchedCount());
//        printf("modifiedCount: %d\n", $result->getModifiedCount());
//        printf("upsertedCount: %d\n", $result->getUpsertedCount());
//        printf("deletedCount:  %d\n", $result->getDeletedCount());
//
//        foreach ($result->getUpsertedIds() as $index => $id) {
//            printf("upsertedId: '%s', index: %d\n", $id, $index);
//        }
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
        } catch (Exception $e) {
            echo $e->getMessage(), "\n";
        }
    }

    /**
     * testDelete
     */
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
        } catch (Exception $e) {
            echo $e->getMessage(), "\n";
        }

    }
}