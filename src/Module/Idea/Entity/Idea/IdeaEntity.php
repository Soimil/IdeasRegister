<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 8/31/15
 * Time: 7:15 PM
 */

namespace src\Module\Idea\Entity\Idea;

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
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * getting Idea name
     *
     * @return mixed
     */
    public function gatName()
    {
        return $this->name;
    }

    /**
     * setting Idea title
     *
     * @param $title
     */
    public function setTitle(string $title)
    {
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
     */
    public function setContent(string $content)
    {
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
     */
    public function setUserId(integer $userId)
    {
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