<?php

use App\Controllers\AuthController;
use App\Controllers\DashboardController;

$router->get('/', [DashboardController::class, 'index']);
$router->get('/login', [AuthController::class, 'showLogin']);
