<?php
echo "Router";
use App\Controllers\CategoryController;
use App\Controllers\UserController;
use App\Controllers\OrderController;
use App\Controllers\HomeController;
use App\Controllers\CartController;
use App\Controllers\ProductController;
use App\Models\Category;
use Phroute\Phroute\RouteCollector;
use App\Controller\BaseController;
use Phroute\Phroute\Dispatcher;
use Phroute\Phroute\Exception\HttpRouteNotFoundException;
$router = new RouteCollector();
$router->get(HomeController::class,"index");
$router->post('/',CategoryController::class,"addCate");
$router->get('/products', [ProductController::class, 'index']);
$router->get('/products/create', [ProductController::class, 'addProduct']);
$router->post('/products/store', [ProductController::class, 'saveProduct']);
$router->get('/products/edit/{id}', [ProductController::class, 'editProduct']);
$router->post('/products/update/{id}', [ProductController::class, 'updateProduct']);
$router->get('/products/delete/{id}', [ProductController::class, 'destroyProduct']);
?>