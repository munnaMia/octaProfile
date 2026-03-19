<?php

declare(strict_types=1);

use Core\Router;
use Core\Util;

const BASE_PATH = __DIR__ . '/../';

require_once BASE_PATH . 'Core/Util.php'; // temporary...

Util::setBasePath(BASE_PATH);

Util::autoRegisterClasses(); // register class those that aren't.

// parsing url and methods
$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

$router = new Router;

require Util::basePath('routes/routes.php');

$router->serve($uri, $method);
