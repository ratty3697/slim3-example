<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

//loading all classes
spl_autoload_register(function ($classname) {
    require ("../src/classes/" . $classname . ".php");
});


$app->get('/posts', function (Request $request, Response $response) {
	$this->logger->addInfo("Posts list");
    $mapper = new PostMapper($this->db);
    $tickets = $mapper->getPosts();

    //$response = $this->view->render($response, "tickets.phtml", ["tickets" => $tickets, "router" => $this->router]);
    $response->getBody()->write(var_export($tickets, true));
    return $response;
});


$app->group('/users/', function () {
    $this->get('userid', function (Request $request, Response $response) {
        $response->getBody()->write("Hello, name");
        return $response;
	});

    $this->get('username', function (Request $request, Response $response) {
        $response->getBody()->write("Hello, name");
        return $response;
    });

});
