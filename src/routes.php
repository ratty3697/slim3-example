<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/baby', function (Request $request, Response $response) {
$response->getBody()->write("Hello, name");
return $response;
});


$app->group('/users/{id:[0-9]+}', function () {
    $this->get('', function (Request $request, Response $response) {
    $response->getBody()->write("Hello, name");

    return $response;
	});
});
