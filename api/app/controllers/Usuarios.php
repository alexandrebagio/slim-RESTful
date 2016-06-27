<?php

$app->group('/usuarios', function() {

    $this->get('/', function($request, $response) {
        $response->getBody()->write("Hello");
        return $response;
    });

    $this->get('/{name}', function($request, $response) {
        $name = $request->getAttribute('name');
        $response->getBody()->write("Hello, $name");
        return $response;
    });

});
