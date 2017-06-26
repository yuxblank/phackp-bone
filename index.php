<?php

use yuxblank\phackp\services\ErrorHandlerProvider;

error_reporting(E_ALL);
$loader = require __DIR__ . '/vendor/autoload.php';
$App = yuxblank\phackp\core\Application::getInstance();
$App->bootstrap(__DIR__);
$App->registerService(ErrorHandlerProvider::class,true);
$App->run();


