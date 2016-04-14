<?php

require '../vendor/autoload.php';

//importing settings
$settings = require __DIR__ . '/../settings.php';;

//init app
$app = new \Slim\App(["settings" => $settings]);

// Set up dependencies
require __DIR__ . '/../dependencies.php';

// Register routes
require __DIR__ . '/../routes.php';

//run app
$app->run();