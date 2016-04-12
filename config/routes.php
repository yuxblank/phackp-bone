<?php
return [

    /**
     * New routes using PHP arrays
     */

    'ROUTES' => [

        '/' =>
            [
                'action' => 'App@index',
                'method' => 'GET'
            ],
        'blog/title/{id}' =>
            [
                'action' => 'App@showPost',
                'method' => 'GET',
                'options' =>
                    [
                        'accept' => 'application/json',
                        'return' => 'application/json'
                    ]

            ],
        'blog/{id}' =>
            [
                'action' => 'App@showPost',
                'method' => 'GET',
                'options' =>
                    [
                        'accept' => 'application/json',
                        'return' => 'application/json'
                    ]
            ],
        '404' =>
            [
                'action' => 'Error@notFound404',
                'method' => 'GET',
            ]


    ]


];