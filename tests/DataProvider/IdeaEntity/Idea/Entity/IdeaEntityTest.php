<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 31/08/15
 * Time: 19:52
 */

namespace tests\DataProvider\Idea\Entity\Idea;

use Module\Idea\Entity\IdeaEntity;

class IdeaEntityTest extends \PHPUnit_Framework_TestCase
{
    public function getValidStrings()
    {
        return [
            [
                'n', 't', 'c', 1
            ],
            [
                'nameOfIdea', 'tenSymbols', 'contentOne', 10
            ],
            [
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid amet asperiores cumque earum est exercitationem impedit incidunt minus molestias pariatur placeat quia, reprehenderit sed soluta voluptatem, voluptates. Beatae deleniti doloribus molestiae reiciendis temporibus. Asperiores aspernatur assumenda blanditiis consequatur consequuntur, delectus dolor dolores eaque esse est eum ex excepturi harum, ipsam iusto libero maiores minus molestias nam necessitatibus nemo obcaecati officia officiis omnis perferendis placeat porro possimus, quaerat recusandae reiciendis sed tempore temporibus ullam unde vero voluptatem voluptates? Ab accusantium autem commodi, dolorem ea eligendi esse illum incidunt, ipsum laborum maiores neque nesciunt nihil porro quasi qui, rem reprehenderit sequi!',
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid amet asperiores cumque earum est exercitationem impedit incidunt minus molestias pariatur placeat quia, reprehenderit sed soluta voluptatem, voluptates. Beatae deleniti doloribus molestiae reiciendis temporibus. Asperiores aspernatur assumenda blanditiis consequatur consequuntur, delectus dolor dolores eaque esse est eum ex excepturi harum, ipsam iusto libero maiores minus molestias nam necessitatibus nemo obcaecati officia officiis omnis perferendis placeat porro possimus, quaerat recusandae reiciendis sed tempore temporibus ullam unde vero voluptatem voluptates? Ab accusantium autem commodi, dolorem ea eligendi esse illum incidunt, ipsum laborum maiores neque nesciunt nihil porro quasi qui, rem reprehenderit sequi!',
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid amet asperiores cumque earum est exercitationem impedit incidunt minus molestias pariatur placeat quia, reprehenderit sed soluta voluptatem, voluptates. Beatae deleniti doloribus molestiae reiciendis temporibus. Asperiores aspernatur assumenda blanditiis consequatur consequuntur, delectus dolor dolores eaque esse est eum ex excepturi harum, ipsam iusto libero maiores minus molestias nam necessitatibus nemo obcaecati officia officiis omnis perferendis placeat porro possimus, quaerat recusandae reiciendis sed tempore temporibus ullam unde vero voluptatem voluptates? Ab accusantium autem commodi, dolorem ea eligendi esse illum incidunt, ipsum laborum maiores neque nesciunt nihil porro quasi qui, rem reprehenderit sequi!',
                100
            ],
        ];
    }

    /**
     * @dataProvider getValidStrings
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
     * @dataProvider getValidStrings
     */
    public function getInvalidString()
    {

    }
}
