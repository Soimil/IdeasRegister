<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 9/3/15
 * Time: 10:14 PM
 */

namespace Zemiel\Gateway;

abstract class AbstractGateway
{
    protected $name;

    /**
     * setting Gateway name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        if (!(is_string($name)) || preg_match('/[^a-z_\-0-9]/i', $name) > 0 || strlen($name) === 0) {
            throw new \InvalidArgumentException('Gateway name can\'t by empty and must be string.');
        }

        $this->name = $name;
        return $this;
    }

    /**
     * getting Gateway name
     *
     * @return string
     */
    public function getName()
    {
        if (!$this->name) {
            return get_class($this);
        }
        return $this->name;
    }
}