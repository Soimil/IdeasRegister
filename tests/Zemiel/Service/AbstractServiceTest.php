<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 9/3/15
 * Time: 10:10 PM
 */

namespace Tests\Zemiel\Service;

use Zemiel\Service\AbstractService;

class ServiceTest extends AbstractService
{

}

class AbstractServiceTest extends \PHPUnit_Framework_TestCase
{

    public function testAbstractClass()
    {
        $abstractClass = new \ReflectionClass('Zemiel\Service\AbstractService');
        var_dump($abstractClass->isAbstract());
    }

    /**
     * @dataProvider Tests\DataProvider\Zemiel\Service\AbstractServiceTest::getValidStrings
     */
    public function testValidStrings($mapper)
    {
        $TestMapper = new ServiceTest();

        $TestMapper->addMapper($mapper);
        $TestMapper->setCurrentMapper($mapper->getName());

        $this->assertEquals($mapper, $TestMapper->getCurrentMapper());

    }

    /**
     * @dataProvider Tests\DataProvider\Zemiel\Service\AbstractServiceTest::getInvalidString
     */
    public function testInvalidString($mapper)
    {
        $TestMapper = new ServiceTest();

        $TestMapper->addMapper($mapper);
        $TestMapper->setCurrentMapper($mapper->getName());

        $this->assertEquals($mapper, $TestMapper->getCurrentMapper());
    }
}