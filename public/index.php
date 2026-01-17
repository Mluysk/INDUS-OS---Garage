<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Core\App;
use App\Core\Router;

$router = new Router();
require __DIR__ . '/../routes/web.php';

$app = new App($router);
$app->run();
