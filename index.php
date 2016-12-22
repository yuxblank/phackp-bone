<?php
$loader = require __DIR__ . '/vendor/autoload.php';
$App = yuxblank\phackp\core\Application::getInstance();
$App->bootstrap(__DIR__);
$App->registerService(\yuxblank\phackp\services\ErrorHandlerProvider::class);
$App->run();