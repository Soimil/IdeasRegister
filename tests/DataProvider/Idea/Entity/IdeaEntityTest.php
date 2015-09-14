<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 31/08/15
 * Time: 19:52
 */

namespace Tests\DataProvider\Idea\Entity;

class IdeaEntityTest
{
    public static function getValidStrings()
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

    public static function getInvalidString()
    {
        return [
            [
                '', '', '', 0
            ],
            [
                null, null, null, null
            ],
            [
                new IdeaEntity(), new IdeaEntity(), new IdeaEntity(), new IdeaEntity()
            ],
            [
                [1, 2, 3], [5, 6, 7], [8, 9, 0], [1, 2]
            ],
        ];
    }
}
