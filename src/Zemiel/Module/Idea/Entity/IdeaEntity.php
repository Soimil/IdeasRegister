<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 8/31/15
 * Time: 7:15 PM
 */

namespace Zemiel\Module\Idea\Entity;

use Zemiel\Entity\AbstractEntity;

class IdeaEntity extends AbstractEntity
{
    protected $name;
    protected $title;
    protected $content;
    protected $userId;

    /**
     * setting Idea name
     *
     * @param string $name
     * @return $this
     * @throws \Exception
     */
    public function setName($name)
    {
        if (!(is_string($name)) || strlen($name) === 0) {
            throw new \InvalidArgumentException('$name must be string and can\'t by empty.');
        }

        $this->name = $name;
        return $this;
    }

    /**
     * getting Idea name
     *
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * setting Idea title
     *
     * @param string $title
     * @return $this
     * @throws \Exception
     */
    public function setTitle($title)
    {

        if (!(is_string($title)) || strlen($title) === 0) {
            throw new \InvalidArgumentException('Title must by string and can\'t by empty.');
        }

        $this->title = $title;
        return $this;
    }

    /**
     * getting Idea title
     *
     * @return null|string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * setting Idea content
     *
     * @param string $content
     * @return $this
     * @throws \Exception
     */
    public function setContent($content)
    {
        if (!(is_string($content)) || strlen($content) === 0) {
            throw new \InvalidArgumentException('Content must be string and can\'t by empty.');
        }

        $this->content = $content;
        return $this;
    }

    /**
     * getting Idea content
     *
     * @return null|string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * setting Idea owner id
     *
     * @param integer $userId
     * @return $this
     * @throws \Exception
     */
    public function setUserId($userId)
    {
        if (!(is_int($userId))) {
            throw new \InvalidArgumentException('User is must mi integer.');
        }
        $this->userId = $userId;
        return $this;
    }

    /**
     * getting Idea owner id
     *
     * @return null|integer
     */
    public function getUserId()
    {
        return $this->userId;
    }
}