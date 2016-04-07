<?php
require __DIR__ . '/vendor/autoload.php';
$App = yuxblank\phackp\core\Application::getInstance();
$App->bootstrap('config/');
$App->run();