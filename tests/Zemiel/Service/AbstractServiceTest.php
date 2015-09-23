<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 9/3/15
 * Time: 10:10 PM
 */

namespace Tests\Zemiel\Service;

use Zemiel\Service\AbstractService;
use Zemiel\Module\User\Service\UserService;

class ServiceTest extends AbstractService
{

}

class AbstractServiceTest extends \PHPUnit_Framework_TestCase
{
//
//    public function testAbstractClass()
//    {
//        $abstractClass = new \ReflectionClass('Zemiel\Service\AbstractService');
//    }

    /**
     * @dataProvider Tests\DataProvider\Zemiel\Service\AbstractServiceTest::getValidStrings
     * @expectedException \PHPUnit_Framework_Error
     * @expectedExceptionMessage  __construct() must be of the type object, string given
     */
    public function testValidStrings($mapper)
    {
        $TestMapper = new UserService($mapper);

//        $TestMapper->addMapper($mapper);
        $TestMapper->setCurrentMapper($mapper->getName());

        $this->assertEquals($mapper, $TestMapper->getCurrentMapper());

    }

    /**
     * @dataProvider Tests\DataProvider\Zemiel\Service\AbstractServiceTest::getInvalidString
     * @expectedException \PHPUnit_Framework_Error
     * @expectedExceptionMessage  __construct() must be of the type object, string given
     */
    public function testInvalidString($mapper)
    {
        $TestMapper = new ServiceTest();

        $TestMapper->addMapper($mapper);
        $TestMapper->setCurrentMapper($mapper->getName());

        $this->assertEquals($mapper, $TestMapper->getCurrentMapper());
    }
}