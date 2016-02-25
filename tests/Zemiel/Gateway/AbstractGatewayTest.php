<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 9/5/15
 * Time: 8:27 PM
 */

namespace Tests\Zemiel\Gateway;

use Zemiel\Gateway\AbstractGateway;

class GatewayTest extends AbstractGateway
{

}

class AbstractGatewayTest extends \PHPUnit_Framework_TestCase
{
//    public function testAbstractClass()
//    {
//
//    }

    /**
     * @dataProvider Tests\DataProvider\Zemiel\Gateway\AbstractGatewayTest::getValidStrings
     * @param $name
     */
    public function testValidStrings($name)
    {
        $gateway = new GatewayTest();

        $gateway->setName($name);

        $gatewayName = $gateway->getName();

        $this->assertEquals($name, $gatewayName);

    }

    /**
     * @dataProvider Tests\DataProvider\Zemiel\Gateway\AbstractGatewayTest::getInvalidString
     * @expectedException InvalidArgumentException
     * @param $name
     */
    public function testInvalidString($name)
    {
        $gateway = new GatewayTest();

        $gateway->setName($name);

        $gatewayName = $gateway->getName();

        $this->assertEquals($name, $gatewayName);
    }
}