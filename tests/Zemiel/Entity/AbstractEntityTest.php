<?php

/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 8/19/15
 * Time: 9:26 PM
 */
namespace Tests\Zemiel\Entity;

use Zemiel\Entity\AbstractEntity;

class TestClass extends AbstractEntity
{
    protected $name;
    protected $type;
    protected $color;
    protected $price;

    public function testOne()
    {
        return $this->getProperties();
    }

}

//class AbstractEntityTest extends \PHPUnit_Framework_TestCase
//{
//
//    public function testPushAndPop()
//    {
//        $data = ['name' => 'Piotr', 'type' => 'man', 'color' => 'white', 'test' => 'error'];
//
//        //$data = "test";
//
//        $a = new TestClass();
//
//        $a->setEntityData($data);
//
//        $b = ['name' => 'Piotr', 'type' => 'man', 'color' => 'white'];
//
//        $this->assertEquals($b, $a->getEntityData());
//    }
//}

class ExceptionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException InvalidArgumentException
     */
    public function testException()
    {
        $data = "test";

        try {
            $entity = new TestClass($data);
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }


    }
}