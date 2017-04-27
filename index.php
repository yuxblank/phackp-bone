<?php

error_reporting(E_ALL);
$loader = require __DIR__ . '/vendor/autoload.php';
$App = yuxblank\phackp\core\Application::getInstance();
$App->bootstrap(__DIR__);

$App->run();


