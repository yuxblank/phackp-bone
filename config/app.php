<?php
return [


    'app.globals' => [


        /**
         * Application informations
         */

        "APP_NAME" => "phackp-bone",
        "APP_VERSION" => "0.1.6-snapshot",


        /**
         * Author informations
         */
        "AUTHOR" =>
            [
                "NAME" => "Name",
                "EMAIL" => "email@devexample.com"
            ],

        /**
         * App status
         */

        "APP_MODE" => "DEBUG",


        'APP_URL' => 'http://localhost:7000',

    ],

    "app.http" => [

        /**
         * Rest settings
         */

        'INJECT_QUERY_STRING' => true,
        "GZIP" => false,
    ],

    "app.session" => [


        'LIFETIME' => 1024,
        'USE_COOKIES' => true,
        'NAME' => 'pHackp-session',
        'COOKIE' =>
            [
                'PATH' => '/',
                'DOMAIN' => $_SERVER['HTTP_HOST'],
                'SECURE' => array_key_exists('HTTPS', $_SERVER),
                'HTTP_ONLY' => false
            ]

    ],

    'app.view' =>
        [
            'ROOT' => 'src/view',
            'HOOKS' =>
                [
                    'FOOTER' => 'tags/footer.php',
                    'NAVBAR' => 'tags/navbar.php'
                ]

        ]


];