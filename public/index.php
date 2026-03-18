<?php

declare(strict_types=1);

use Core\Router;
use Core\Util;

const BASE_PATH = __DIR__ . '/../';

require_once BASE_PATH . 'Core/Util.php'; // temporary...

Util::setBasePath(BASE_PATH);

Util::autoRegisterClasses(); // register class those that aren't.

$router = new Router;

$router->get('/', 'controllers/index.php');

$router->serve();
