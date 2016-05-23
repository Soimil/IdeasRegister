<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 9/3/15
 * Time: 10:36 PM
 */

namespace Zemiel\Module\User\Service;

use Zemiel\Gateway\AbstractGateway;
use Zemiel\Module\User\Gateway\MongoDbUserGateway;
use Zemiel\Service\AbstractService;


class UserService extends AbstractService
{

    /**
     * @param null|AbstractGateway|AbstractGateway $gateway
     */
    public function __construct(AbstractGateway $gateway = null)
    {
        if (!$gateway) {
            $gateway = new MongoDbUserGateway();
        }

        parent::__construct($gateway);

        $this->addGateway($gateway);
    }

    /**
     * getting User object by id
     *
     * @param integer $userId
     */
    public function getById($userId)
    {

    }

    /**
     * getting all Users objects
     */
    public function findAll()
    {
        $gateway = $this->getCurrentGateway();
        var_dump($gateway);
    }

    /**
     * getting Users by params [column => value]
     *
     * @param array $params
     */
    public function findBy(array $params)
    {

    }

    /**
     * adding new User object
     *
     * @param object $user
     */
    public function insert($user)
    {

    }

    /**
     * updating existing User object
     *
     * @param integer $user
     */
    public function update($user)
    {

    }

    /**
     * deleting User object
     *
     * @param integer $userId
     */
    public function delete($userId)
    {

    }
}