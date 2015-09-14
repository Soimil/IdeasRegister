<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 9/14/15
 * Time: 9:54 PM
 */

namespace Tests\DataProvider\Zemiel\Mapper;

class AbstractMapperTest
{
    public static function getValidStrings()
    {
        return [
            [
                'a'
            ],
            [
                'Ala'
            ],
            [
                'LongString'
            ]
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