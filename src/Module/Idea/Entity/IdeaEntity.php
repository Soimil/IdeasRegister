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
     * @param $name
     * @throws \Exception
     */
    public function setName($name)
    {
        if (!(is_string($name)) || strlen($name) === 0) {
            throw new \InvalidArgumentException('Must be string.');
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
     * @param $title
     * @throws \Exception
     */
    public function setTitle($title)
    {
        if (!(is_string($title)) || strlen($title) === 0) {
            throw new \InvalidArgumentException('Title must by string and can\'t by empty.');
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
     * @param $content
     * @throws \Exception
     */
    public function setContent($content)
    {
        if (!(is_string($content)) || strlen($content) === 0) {
            throw new \InvalidArgumentException('Content must be string and can\'t by empty.');
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
     * @param $userId
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