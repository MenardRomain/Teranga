<?php

use App\Core\Router;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../app/core/bootstrap.php';

$router = new Router;

require __DIR__ . '/../routes/web.php';

$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$method = $_SERVER['REQUEST_METHOD'];

$router->direct($uri, $method);
