<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 8/31/15
 * Time: 7:15 PM
 */

namespace Module\Idea\Entity;

class IdeaEntity
{
    protected $name;
    protected $title;
    protected $content;
    protected $userId;

    /**
     * setting Idea name
     *
     * @param string $name
     * @throws \Exception
     */
    public function setName($name)
    {
        if (!(is_string($name))) {
            throw new \InvalidArgumentException('$name must be string.');
        }

        if (strlen($name) === 0) {
            throw new \InvalidArgumentException('$name can\'t by empty string.');
        }

        $this->name = $name;
    }

    /**
     * getting Idea name
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * setting Idea title
     *
     * @param string $title
     * @throws \Exception
     */
    public function setTitle($title)
    {
        if (!(is_string($title))) {
            throw new \InvalidArgumentException('Title must by string.');
        }
        if (strlen($title) === 0) {
            throw new \InvalidArgumentException('Title can\'t by empty string.');
        }
        $this->title = $title;

    }

    /**
     * getting Idea title
     *
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * setting Idea content
     *
     * @param string $content
     * @throws \Exception
     */
    public function setContent($content)
    {
        if (!(is_string($content))) {
            throw new \InvalidArgumentException('Content must be string.');
        }

        if (strlen($content) === 0) {
            throw new \InvalidArgumentException('Content can\'t by empty string.');
        }
        $this->content = $content;

    }

    /**
     * getting Idea content
     *
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * setting Idea owner id
     *
     * @param integer $userId
     * @throws \Exception
     */
    public function setUserId($userId)
    {
        if (!(is_int($userId))) {
            throw new \InvalidArgumentException('User is must mi integer.');
        }
        $this->userId = $userId;

    }

    /**
     * getting Idea owner id
     *
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }
}