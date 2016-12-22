<?php
return [


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
     * App filesystem settings
     */

    /* "APP_ROOT" => __DIR__ ,*/


    /**
     * App status
     */

    "APP_MODE" => "DEBUG",


    'APP_URL' => 'http://localhost:7000',


    /**
     * Rest settings
     */

    'INJECT_QUERY_STRING' => true,

    /**
     * Cookies and Sessions
     */

    'SESSION' =>
        [
            'LIFETIME' => 1024,
            'USE_COOKIES' => true,
            'NAME' => 'pHackp-session',
            'COOKIE' =>
                [
                    'PATH' => '/',
                    'DOMAIN' => $_SERVER['HTTP_HOST'],
                    'SECURE' => array_key_exists('HTTPS',$_SERVER),
                    'HTTP_ONLY' => false
                ]
        ],


    /**
     * Performance settings
     */

    /*    "CACHE" => false, // not implemented yet*/
    "GZIP" => false,


    'USE_DATABASE' => true,


    // change default project-level namepsaces
    'NAMESPACE' =>

        [
            'MODEL' => 'model\\',

        ],

    'VIEW' =>
        [
            'ROOT' => 'src/view',
            'HOOKS' =>
                [
                    'FOOTER' => 'tags/footer.php'
                ]

        ]


];