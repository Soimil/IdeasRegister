<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 31/08/15
 * Time: 19:52
 */

namespace tests\Idea\Entity\Idea;

use Module\Idea\Entity\Idea\IdeaEntity;

class IdeaEntityTest extends \PHPUnit_Framework_TestCase
{
    public function testPopulateIdeaEntity()
    {
        $ideaEntity = new IdeaEntity();
        
        $ideaEntity->setName('Test');
        $ideaEntity->setContent('');
        $ideaEntity->setTitle('Title Idea');
        $ideaEntity->setUserId(5);

        $this->assertEquals('Test', $ideaEntity->getName());
        $this->assertEquals('test content', $ideaEntity->getContent());
        $this->assertEquals('Title Idea', $ideaEntity->getTitle());
        $this->assertEquals(5, $ideaEntity->getUserId());

    }
}