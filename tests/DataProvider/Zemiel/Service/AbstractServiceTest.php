<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 9/14/15
 * Time: 11:07 PM
 */

namespace Tests\DataProvider\Zemiel\Service;

use Zemiel\Module\User\Mapper\UserMapper;

class AbstractServiceTest
{
    public static function getValidStrings()
    {
        return [
            [
                $service = new UserMapper()
            ],
            [
                $service = new UserMapper()
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