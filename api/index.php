<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

//header("Access-Control-Allow-Origin: *");
//header('Access-Control-Allow-Headers: DNT,X-Mx-ReqToken,Keep-Alive,User-Agent,X-Requested-With,If-Modified-Since,Cache-Control,Content-Type');
//header('Access-Control-Allow-Methods: GET, POST, PUT, OPTIONS, DELETE');

$app = new \Slim\App;

require 'app/config/database.php';
require 'app/routes/routes.php';

$app->run();
