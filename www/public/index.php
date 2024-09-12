<?php
// Autoload core files using namespaces and PSR-4 autoloading
use app\controllers\HomeController;
use app\controllers\ProductController;
use app\controllers\UserController;
use core\Router;

spl_autoload_register(function($class) {
    $file = '../' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});

$router = new Router();

// Define routess
$router->add('/', [new HomeController(), 'index']);
$router->add('/users', [new UserController(), 'index']);
$router->add('/products', [new ProductController(), 'index']);
$router->add('/products/create', [new ProductController(), 'create']);
$router->add('/products/store', [new ProductController(), 'store']);

// Get the requested URL
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Dispatch the route
$router->dispatch($url);
