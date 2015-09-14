<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 9/14/15
 * Time: 11:07 PM
 */

namespace Tests\DataProvider\Zemiel\Service;

use Zemiel\Module\Idea\Service\IdeaService;
use Zemiel\Module\User\Service\UserService;

class AbstractServiceTest
{
    public static function getValidStrings()
    {
        return [
            [
                $service = new UserService()
            ],
            [
                $service = new IdeaService()
            ],
        ];
    }

    public static function getInvalidString()
    {
        return [
            [
                ''
            ],
            [
                'Ala ma kota'
            ],
            [
                '?#@'
            ],
            [
                ['1','2','3']
            ]
        ];
    }
}