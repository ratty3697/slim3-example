<?php

require '../src/vendor/autoload.php';

//importing settings
//$settings = require __DIR__ . '/../src/settings.php';;

$config['displayErrorDetails'] = true;

$config['db']['host']   = "localhost";
$config['db']['user']   = "root";
$config['db']['pass']   = "pioneer";
$config['db']['dbname'] = "slimdatabase";

//init app
$app = new \Slim\App(["settings" => $config]);

// Set up dependencies
require __DIR__ . '/../src/dependencies.php';

// Register routes
require __DIR__ . '/../src/routes.php';

//run app
$app->run();
