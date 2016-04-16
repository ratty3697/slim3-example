<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../src/vendor/autoload.php';

//importing settings
$settings = require __DIR__ . '/../src/settings.php';;

//init app
$app = new \Slim\App(["settings" => $settings]);

// Set up dependencies
require __DIR__ . '/../src/dependencies.php';

// Register routes

require __DIR__ . '/../src/routes.php';


//run app
$app->run();
