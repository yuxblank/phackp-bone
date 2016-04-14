<?php
return [


    /**
     * Application informations
     */

    "APP_NAME" => "phackp-bone",
    "APP_VERSION" => "0.1",


    /**
     * Author informations
     */
    "AUTHOR" =>
        [
            "NAME"=> "Name",
            "EMAIL"=> "email@devexample.com"
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
     * Performance settings
     */

    /*    "CACHE" => false, // not implemented yet*/
    "GZIP" => false,


    'USE_DATABASE' => false,


    // change default project-level namepsaces
    'NAMESPACE' =>

        [
            'CONTROLLER' => 'controller\\',
            'MODEL'      => 'model\\',

        ]




































];