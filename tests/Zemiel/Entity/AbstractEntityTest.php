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

class AbstractEntityTest extends \PHPUnit_Framework_TestCase
{

    public function testPushAndPop()
    {
        $data = ['name' => 'Piotr', 'type' => 'man', 'test' => 'error', 'height' => 150];

        //$data = "test";

        $a = new TestClass();

        $a->setEntityData($data);

        $b = ['name' => 'Piotr', 'type' => 'man', 'color' => 'white'];

        $this->assertEquals($b, $a->getEntityData());
    }

    /**
     * @expectedException \Exception
     */
    public function testException()
    {
        $data = "test";

        $entity = new TestClass($data);

    }
}