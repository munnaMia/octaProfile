<?php
declare(strict_types=1);

use Core\Util;

const BASE_PATH = __DIR__ . '/../';

require_once BASE_PATH . 'Core/Util.php'; // temporary...

Util::setBasePath(BASE_PATH);

require(BASE_PATH . 'views/index.view.php');