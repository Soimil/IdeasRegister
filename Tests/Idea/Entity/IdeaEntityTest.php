<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 31/08/15
 * Time: 19:52
 */

namespace Tests\Idea\Entity;

use Module\Idea\Entity\IdeaEntity;

class IdeaEntityTest extends \PHPUnit_Framework_TestCase
{
    public function testPopulateIdeaEntity()
    {
        $ideaEntity = new IdeaEntity();
        
        $ideaEntity->setName('Test');
        $ideaEntity->setContent('ttt');
        $ideaEntity->setTitle('Title Idea');
        $ideaEntity->setUserId(5);

        $this->assertEquals('Test', $ideaEntity->getName());
        $this->assertEquals('test content', $ideaEntity->getContent());
        $this->assertEquals('Title Idea', $ideaEntity->getTitle());
        $this->assertEquals(5, $ideaEntity->getUserId());

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
}