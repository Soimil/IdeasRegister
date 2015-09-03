<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 9/1/15
 * Time: 11:26 PM
 */

namespace Module\User\Entity;

class UserEntity
{
    protected $firstName;
    protected $lastName;
    protected $type;

    /**
     * setting User first name
     *
     * @param string $firstName
     * @return $this
     */
    public function setFirstName($firstName)
    {
        if (!(is_string($firstName)) || strlen($firstName) === 0) {
            throw new \InvalidArgumentException('$firstName must be string and can\'t by empty string.');
        }

        $this->firstName = $firstName;
        return $this;
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
     * @return $this
     */
    public function setLastName($lastName)
    {
        if (!(is_string($lastName)) || strlen($lastName) === 0) {
            throw new \InvalidArgumentException('$lastName must be string and can\'t by empty string.');
        }

        $this->firstName = $lastName;
        return $this;
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
     * @return $this
     */
    public function setType($type)
    {
        if (!in_array($type, ['user', 'admin'])) {
            throw new \InvalidArgumentException('$type can\'t by only user or admin.');
        }
        $this->type = $type;
        return $this;
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