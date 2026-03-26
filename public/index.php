<?php

declare(strict_types=1);

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . "/vendor/autoload.php";

use Core\Config;
use Core\Database;
use Core\Router;
use Core\Util;

Util::setBasePath(BASE_PATH);

$dbConfig = Config::getConfigs('database');

$db = new Database($dbConfig);

Util::dumpAndDie($db->connection);

// parsing url and methods
$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

$router = new Router;

require Util::basePath('routes/routes.php');

$router->serve($uri, $method);
