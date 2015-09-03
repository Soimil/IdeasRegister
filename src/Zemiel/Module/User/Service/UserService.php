<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 9/3/15
 * Time: 10:36 PM
 */

namespace Zemiel\Module\User\Service;

use Zemiel\Module\Service\AbstractService;

class UserService extends AbstractService
{
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

    /**
     * getting full name current User
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->firstName . ' ' . $this->lastname;
    }

}