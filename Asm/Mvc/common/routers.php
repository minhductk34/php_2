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
// $router->phuong_thuc('duong dan', function () {return xxx;});
$router->get('/', function () {
    return 'Home';
});
$router->get('/products', [ProductController::class, 'index']);
$router->get('/products/create', [ProductController::class, 'create']);
$router->post('/products/store', [ProductController::class, 'store']);
$router->get('/products/edit/{id}', [ProductController::class, 'edit']);
$router->post('/products/update/{id}', [ProductController::class, 'update']);
$router->get('/products/delete/{id}', [ProductController::class, 'destroy']);


$router->group(['prefix' => 'users'], function ($router) {
    $router->get('/', [UserController::class, 'index']);
    $router->get('create', [UserController::class, 'create']);
    $router->post('store', [UserController::class, 'store']);
    $router->get('edit/{id}', [UserController::class, 'edit']);
    $router->post('update/{id}', [UserController::class, 'update']);
    $router->get('delete/{id}', [UserController::class, 'destroy']);
});

$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$url = isset($_GET['url']) ? ($_GET['url']) : '/';

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

echo $response;
?>