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

abstract class AbstractServiceTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider Tests\DataProvider\Zemiel\Service\AbstractServiceTest::getValidStrings
     */
    public function testValidStrings($mapper)
    {
        $TestMapper = new UserService($mapper);

        $TestMapper->addMapper($mapper);
        $TestMapper->setCurrentMapper($mapper->getName());

        $this->assertEquals($mapper, $TestMapper->getCurrentMapper());

    }

    /**
     * @dataProvider Tests\DataProvider\Zemiel\Service\AbstractServiceTest::getInvalidString
     * @expectedException \PHPUnit_Framework_Error
     * @expectedExceptionMessage  must be an instance of Zemiel\Mapper\AbstractMapper
     */
    public function testInvalidString($mapper)
    {
        $TestMapper = new UserService();

        $TestMapper->addMapper($mapper);
        $TestMapper->setCurrentMapper($mapper->getName());

        $this->assertEquals($mapper, $TestMapper->getCurrentMapper());
    }
}