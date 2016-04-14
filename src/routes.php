<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

//loading all classes
spl_autoload_register(function ($classname) {
    require ("../src/classes/" . $classname . ".php");
});


function utf8ize($d) {
    if (is_array($d)) {
        foreach ($d as $k => $v) {
            $d[$k] = utf8ize($v);
        }
    } else if (is_string ($d)) {
        return utf8_encode($d);
    }
    return $d;
}

$app->group('/posts', function () {
    $this->get('', function (Request $request, Response $response) {
        $this->logger->addInfo("Posts list");
        $mapper = new PostMapper($this->db);
        $posts = $mapper->getPosts();

        $posts = utf8ize($posts);
        $response->getBody()->write(var_export($posts , true));
        return $response;
    });

    $this->post('/new', function (Request $request, Response $response) {
        $data = $request->getParsedBody();
        $post_data = [];
        $post_data['title'] = filter_var($data['title'], FILTER_SANITIZE_STRING);
        $post_data['description'] = filter_var($data['description'], FILTER_SANITIZE_STRING);
        $post_data['type'] = filter_var($data['type'], FILTER_SANITIZE_STRING);;

        $post = new SinglePostData($post_data);
        $post_mapper = new PostMapper($this->db);

        try {
            $post_mapper->save($post);
        }

        //catch exception for not saving data
        catch(Exception $e) {
            $response->getBody()->write(var_export('{"status":"unable to add!!"}' , true));
            return $response;
        }

        $response->getBody()->write(var_export('{"status":"successfully added!!"}' , true));
        return $response;
    });

    $this->get('/{id}', function (Request $request, Response $response, $args) {
        $post_id = (int)$args['id'];
        $mapper = new PostMapper($this->db);
        $post = $mapper->getPostById($post_id);

        $response->getBody()->write(var_export($post, true));
        return $response;

    });

});
