<?php

namespace App\Twill\Capsules\Homepages\Support;

class Crops
{
    // Modules

    const HOMEPAGE = [
        'role-homepage-cover' => self::DEFAULT + self::MOBILE,
        'role-homepage-slideshow' => self::ORIGINAL,
    ];

    // Crops

    const DEFAULT = [
        'default' => [
            [
                'name' => 'default',
                'ratio' => 16 / 9,
            ],
        ],
    ];

    const MOBILE = [
        'mobile' => [
            [
                'name' => 'mobile',
                'ratio' => 3 / 2,
            ],
        ],
    ];

    const ORIGINAL = [
        'default' => [
            [
                'name' => 'default',
                'ratio' => null,
            ],
        ],
    ];
}
