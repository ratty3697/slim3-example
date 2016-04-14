<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

//loading all classes
spl_autoload_register(function ($classname) {
    require ("../src/classes/" . $classname . ".php");
});



$app->group('/posts/', function () {
    $this->get('', function (Request $request, Response $response) {
        $this->logger->addInfo("Posts list");
        $mapper = new PostMapper($this->db);
        $posts = $mapper->getPosts();

        //$response = $this->view->render($response, "tickets.phtml", ["tickets" => $tickets, "router" => $this->router]);
        $response->getBody()->write(var_export($posts, true));
        return $response;
    });

    $this->post('new', function (Request $request, Response $response) {
        $data = $request->getParsedBody();
        $post_data = [];
        $post_data['title'] = filter_var($data['title'], FILTER_SANITIZE_STRING);
        $post_data['description'] = filter_var($data['description'], FILTER_SANITIZE_STRING);
        $post_data['type'] = filter_var($data['type'], FILTER_SANITIZE_STRING);;

        $post = new SinglePostData($post_data);
        $post_mapper = new PostMapper($this->db);
        $post_mapper->save($post);

        $response = $response->withRedirect("/tickets");
        return $response;
    });

    $this->get('{id}', function (Request $request, Response $response, $args) {
        $post_id = (int)$args['id'];
        $mapper = new PostMapper($this->db);
        $post = $mapper->getPostById($post_id);

        $response->getBody()->write(var_export($post, true));
        return $response;

        //$response = $this->view->render($response, "ticketdetail.phtml", ["ticket" => $ticket]);
        //return $response;
    });

});
