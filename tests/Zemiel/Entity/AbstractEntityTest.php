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
        $to = new TestClass();

        return $to->testOne();
    }
}