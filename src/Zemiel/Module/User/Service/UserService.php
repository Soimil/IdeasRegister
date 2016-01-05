<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 9/3/15
 * Time: 10:36 PM
 */

namespace Zemiel\Module\User\Service;

use Zemiel\Service\AbstractService;
use Zemiel\Module\User\Mapper\UserMapper;
use Zemiel\Mapper\AbstractMapper;

class UserService extends AbstractService
{

    /**
     * @param null|AbstractMapper $mapper
     */
    public function __construct(AbstractMapper $mapper = null)
    {
        if (!$mapper) {
            $mapper = new UserMapper();
        }

        $this->addMapper($mapper);
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
        return $this->getCurrentMapper()->findAll();
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