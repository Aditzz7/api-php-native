<?php
use Src\Router;
use Src\Controllers\UserController;

require __DIR__.'/../src/Router.php';
require __DIR__.'/../src/Controllers/UserController.php';

$router = new Router();
$userController = new UserController();

// Menambahkan route
$router->add('GET', '/api-php-native/public/api/v1/users', [$userController, 'index']);
$router->add('GET', '/api-php-native/public/api/v1/users1', fn() => $userController->show(1));

// Menjalankan router
$router->run();