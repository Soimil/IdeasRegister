<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 9/1/15
 * Time: 11:26 PM
 */

namespace src\Module\Idea\Entity;

class UserEntity
{
    protected $firstName;
    protected $lastName;
    protected $type;

    /**
     * setting User first name
     *
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        if (!(is_string($firstName)) || strlen($firstName) === 0) {
            throw new \InvalidArgumentException('$firstName must be string and can\'t by empty string.');
        }

        $this->firstName = $firstName;
    }

    /**
     * getting User first name
     *
     * @return null|string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * setting User last name
     *
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        if (!(is_string($lastName)) || strlen($lastName) === 0) {
            throw new \InvalidArgumentException('$lastName must be string and can\'t by empty string.');
        }

        $this->firstName = $lastName;
    }

    /**
     * getting User last name
     *
     * @return null|string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * getting User full name
     *
     * @return null|string
     */
    public function getFullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    /**
     * setting User type
     *
     * @param string $type
     */
    public function setType($type)
    {
        if (!in_array($type, ['user', 'admin'])) {
            throw new \InvalidArgumentException('$type can\'t by only user or admin.');
        }
        $this->type = $type;
    }

    /**
     * getting User type
     *
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }
}