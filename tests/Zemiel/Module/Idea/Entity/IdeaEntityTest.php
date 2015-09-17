<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 31/08/15
 * Time: 19:52
 */

namespace Tests\Zemiel\Module\Idea\Entity;

use Zemiel\Module\Idea\Entity\IdeaEntity;

class IdeaEntityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider Tests\DataProvider\Idea\Entity\IdeaEntityTest::getValidArray
     */
    public function testPopulateIdeaEntity($array)
    {
        $ideaEntity = new IdeaEntity($array);

        $this->assertEquals($array['name'], $ideaEntity->getName());
        $this->assertEquals($array['content'], $ideaEntity->getContent());
        $this->assertEquals($array['title'], $ideaEntity->getTitle());
        $this->assertEquals($array['userId'], $ideaEntity->getUserId());

    }

    /**
     * @dataProvider Tests\DataProvider\Idea\Entity\IdeaEntityTest::getValidStrings
     */
    public function testValidStrings($name, $title, $content, $userId)
    {
        $ideaEntity = new IdeaEntity();

        $ideaEntity->setName($name);
        $ideaEntity->setTitle($title);
        $ideaEntity->setContent($content);
        $ideaEntity->setUserId($userId);

        $this->assertEquals($name, $ideaEntity->getName());
        $this->assertEquals($title, $ideaEntity->getTitle());
        $this->assertEquals($content, $ideaEntity->getContent());
        $this->assertEquals($userId, $ideaEntity->getUserId());
    }

    /**
     * @dataProvider Tests\DataProvider\Idea\Entity\IdeaEntityTest::getInvalidString
     * @expectedException "Must be correct value"
     */
    public function testInvalidString($name, $title, $content, $userId)
    {
        $ideaEntity = new IdeaEntity();

        $ideaEntity->setName($name);
        $ideaEntity->setTitle($title);
        $ideaEntity->setContent($content);
        $ideaEntity->setUserId($userId);

        $this->assertEquals($name, $ideaEntity->getName());
        $this->assertEquals($title, $ideaEntity->getTitle());
        $this->assertEquals($content, $ideaEntity->getContent());
        $this->assertEquals($userId, $ideaEntity->getUserId());
    }

    /**
     * @dataProvider Tests\DataProvider\Idea\Entity\IdeaEntityTest::getValidStrings
     */
    public function testFluent($name, $title, $content, $userId)
    {
        $ideaEntity = new IdeaEntity();
        $ideaEntity->setName($name)
            ->setTitle($title)
            ->setContent($content)
            ->setUserId($userId);

        $this->assertEquals($name, $ideaEntity->getName());
        $this->assertEquals($title, $ideaEntity->getTitle());
        $this->assertEquals($content, $ideaEntity->getContent());
        $this->assertEquals($userId, $ideaEntity->getUserId());
    }
}