<?php

use yuxblank\phackp\core\Application;

return [
    'doctrine.config' => [
        'entities_paths' => [Application::$ROOT . "/doctrine_models"],
        'is_dev' => true,
        'proxy_dir' => null,
        'cache' => null,
        'simple_annotations' => false,
        'connection' =>
            [
                'driver'   => 'pdo_mysql',
                'user'     => 'root',
                'password' => '',
                'dbname'   => 'phackpbone',
            ]
    ]
];