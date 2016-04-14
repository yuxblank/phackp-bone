<?php
return [

    /**
     * New routes using PHP arrays
     */

    'ROUTES' => [

        'GET' => [
            [
                'url' => '/',
                'action' => 'App@index'
            ],
            [
                'url' => 'blog/title/{id}',
                'action' => 'App@showPost',
                'options' =>
                    [
                        'accept' => 'application/json',
                        'return' => 'application/json'
                    ]

            ],
            [
                'url' => 'blog/{id}',
                'action' => 'App@showPost',
            ],
            [
                'url' => 'api',
                'action' => 'Rest@get'
            ],

        ],
        'POST' => [
            [
                'url' => 'api',
                'action' => 'Rest@post',
                'options' =>
                    [
                        'accept' => 'application/json',
                        'return' => 'application/json'
                    ]
            ],
        ],
        'PUT' => [
            [
                'url' => 'api',
                'action' => 'Rest@put'
            ],
        ],
        'PATCH' => [
            [
                'url' => 'api',
                'action' => 'Rest@patch'
            ]
        ],
        'DELETE' => [
            [
                'url' => 'api',
                'action' => 'Rest@delete'
            ]
        ],
        'HEAD' => [
            [
                'url' => 'api',
                'action' => 'Rest@head'
            ]
        ],
        'OPTIONS' => [
            [
                'url' => 'api',
                'action' => 'Rest@options'
            ]
        ],

        /**
         * ERROR is not HTTP. Is used for pHackp error page mapping.
         */

        'ERROR' => [
            404 =>
                [
                    'url' => '404',
                    'action' => 'Error@notFound404'
                ],
        ]
    ]


];