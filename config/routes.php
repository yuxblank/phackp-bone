<?php
return [

    /**
     * New routes using PHP arrays
     */

    'routes' => [

        'GET' => [
            [
                'url' => '/',
                'method' => 'index',
                'class' => \controller\App::class,
                'alias' => 'home'
            ],
            [
                'url' => 'blog/title/{id}',
                'method' => 'showPost',
                'class' => \controller\App::class,
                'alias' => 'blogpost'

            ],
            [
                'url' => 'blog',
                'method' => 'posts',
                'class' => \controller\App::class,
            ],

            [
                'url' => 'tag/{id}',
                'method' => 'tagSearch',
                'class' => \controller\App::class,
            ],

            [
                'url' => 'api',
                'method' => 'get',
                'class' => \controller\Rest::class,
            ],

        ],
        'POST' => [
            [
                'url' => 'api',
                'method' => 'post',
                'class' => \controller\Rest::class,
                'options' =>
                    [
                        'accept' => 'application/json',
                        'return' => 'application/json'
                    ]
            ],
            [
                'url' => '/',
                'method' => 'index',
                'class' => \controller\App::class,
                'alias' => 'home'
            ],
        ],
        'PUT' => [
            [
                'url' => 'api',
                'class' => \controller\Rest::class,
                'method' => 'put'
            ],
        ],
        'PATCH' => [
            [
                'url' => 'api',
                'class' => \controller\Rest::class,
                'method' => 'patch'
            ]
        ],
        'DELETE' => [
            [
                'url' => 'api',
                'class' => \controller\Rest::class,
                'method' => 'delete'
            ]
        ],
        'HEAD' => [
            [
                'url' => 'api',
                'class' => \controller\Rest::class,
                'method' => 'head'
            ]
        ],
        'OPTIONS' => [
            [
                'url' => 'api',
                'class' => \controller\Rest::class,
                'method' => 'options'
            ]
        ],

        /**
         * ERROR is not HTTP. Is used for pHackp error page mapping.
         */

        'ERROR' => [
            404 =>
                [
                    'url' => '404',
                    'method' => 'notFound404',
                    'class' => \controller\Error::class
                ],
            500 =>
                [
                    'url' => '505',
                    'method' => 'onError',
                    'class' => \controller\Error::class
                ],
        ]
    ]


];