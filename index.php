<?php


require "core/bootstrap.php";

//$router = new Router();
//require 'routes.php';
//$uri=trim($_SERVER['REQUEST_URI'] , '/');
//require $router->direct($uri);
//die(var_dump($app));

$router = Router::load('routes.php');
require $router -> direct(Request::uri());
