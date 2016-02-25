<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 9/5/15
 * Time: 8:30 PM
 */

namespace Tests\Zemiel\Module\User\Service;

use Zemiel\Module\User\Service\UserService;

class UserServiceTest extends \PHPUnit_Framework_TestCase
{
    public function testUserService()
    {
        $userService = new UserService();

        $userService->setCurrentGateway('UserGateway')->findAll();
    }
}