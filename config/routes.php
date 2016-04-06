<?php
return [

    /**
     * New routes using PHP arrays
     */

    '/' =>
        [
            'action'     => 'App@index',
            'method'     => 'GET'
        ],
    '/blog/{id}' =>
        [
            'action'     => 'App@showPost',
            'method'     => 'GET',
            'options' =>
                [
                    'accept' => 'application/json',
                    'return' => 'application/json'
                ]
        ]






];