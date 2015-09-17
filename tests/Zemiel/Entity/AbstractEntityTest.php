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
            return null;
        }

        return $data;
    }

}

class AbstractEntityTest extends \PHPUnit_Framework_TestCase
{

    public function testPushAndPop()
    {
        $data = ['name' => 'Piotr', 'type' => 'men', 'color' => 'white', 'price' => 0, 'height' => 350];

        $a = new TestClass();
        $a->setEntityData($data);

        $data['height'] = null;
        $this->assertEquals($data, $a->getEntityData());
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testExceptionPushWrongData()
    {
        $data = "test";

        $entity = new TestClass($data);

        $this->assertEquals($data, $entity->getEntityData());
    }
}