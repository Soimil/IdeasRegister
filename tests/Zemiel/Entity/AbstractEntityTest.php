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
    protected $height;

    public function testOne()
    {
        return $this->getProperties();
    }

    public function setHeight($data)
    {
        if($data > 220 || !is_int($data)) {
            return false;
        }

        return $data;
    }

}

class AbstractEntityTest extends \PHPUnit_Framework_TestCase
{

    public function testPushAndPop()
    {
        $data = ['height' => 150];

        $a = new TestClass();

        $a->setEntityData($data);

        $b = ['height' => 250];

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