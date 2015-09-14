<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 9/5/15
 * Time: 8:27 PM
 */

namespace Tests\Zemiel\Mapper;

use Zemiel\Mapper\AbstractMapper;

class MapperTest extends AbstractMapper
{

}

class AbstractMapperTest extends \PHPUnit_Framework_TestCase
{
    public function testAbstractClass()
    {

    }

    /**
     * @dataProvider Tests\DataProvider\Zemiel\Mapper\AbstractMapperTest::getValidStrings
     */
    public function testValidStrings($name)
    {
        $mapper = new MapperTest();

        $mapper->setName($name);

        $this->assertEquals($name, $mapper->getName());

    }

    /**
     * @dataProvider Tests\DataProvider\Zemiel\Mapper\AbstractMapperTest::getInvalidString
     */
    public function testInvalidString($name)
    {
        $mapper = new MapperTest();

        $mapper->setName($name);

        $this->assertEquals($name, $mapper->getName());
    }
}