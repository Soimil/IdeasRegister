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
     * @param $gateway
     * @internal param $gateway
     */
    public function testValidStrings($gateway)
    {
        $TestGateway = new UserService($gateway);

        $TestGateway->addGateway($gateway);
        $TestGateway->setCurrentGateway($gateway->getName());

        $this->assertEquals($gateway, $TestGateway->getCurrentGateway());

    }

    /**
     * @dataProvider Tests\DataProvider\Zemiel\Service\AbstractServiceTest::getInvalidString
     * @expectedException \PHPUnit_Framework_Error
     * @expectedExceptionMessage  must be an instance of Zemiel\Gateway\AbstractGateway
     * @param $gateway
     */
    public function testInvalidString($gateway)
    {
        $TestGateway = new UserService($gateway);

        $TestGateway->addGateway($gateway);
        $TestGateway->setCurrentGateway($gateway->getName());

        $this->assertEquals($gateway, $TestGateway->getCurrentGateway());
    }
}