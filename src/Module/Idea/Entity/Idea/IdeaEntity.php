<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 8/31/15
 * Time: 7:15 PM
 */

namespace Module\Idea\Entity\Idea;

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
        if (!(is_string($name))) {
            throw new \Exception('Must be string.');
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
        if (!(is_string($title))) {
            throw new \Exception('Must be string.');
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
        if (!(is_string($content))) {
            throw new \Exception('Must be string.');
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
            throw new \Exception('Must be integer.');
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