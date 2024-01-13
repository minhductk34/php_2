<?php
// Import các controllers và models
use App\Controllers\CategoryController;
use App\Controllers\UserController;
use App\Controllers\OrderController;
use App\Controllers\HomeController;
use App\Controllers\CartController;
use App\Controllers\ProductController;
use App\Models\Category;

// Import các thành phần từ thư viện Phroute
use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;
use Phroute\Phroute\Exception\HttpRouteNotFoundException;

// Tạo đối tượng RouteCollector để quản lý các đường dẫn
$router = new RouteCollector();

// Định nghĩa route cho trang chủ
$router->get('/', function () {
    return 'Home';
});

// Định nghĩa các route cho sản phẩm
$router->group(['prefix' => 'products'], function ($router) {
    $router->get('/', [ProductController::class, 'index']);
    $router->get('/create', [ProductController::class, 'create']);
    $router->post('/store', [ProductController::class, 'store']);
    $router->get('/edit/{id}', [ProductController::class, 'edit']);
    $router->post('/update/{id}', [ProductController::class, 'update']);
    $router->get('/delete/{id}', [ProductController::class, 'destroy']);
});

// Định nghĩa các route cho người dùng
$router->group(['prefix' => 'users'], function ($router) {
    $router->get('/', [UserController::class, 'index']);
    $router->get('/create', [UserController::class, 'create']);
    $router->post('/store', [UserController::class, 'store']);
    $router->get('/edit/{id}', [UserController::class, 'edit']);
    $router->post('/update/{id}', [UserController::class, 'update']);
    $router->get('/delete/{id}', [UserController::class, 'destroy']);
});

// Tạo đối tượng Dispatcher để phân phối các route
$dispatcher = new Dispatcher($router->getData());

// Xử lý URL
$url = isset($_GET['url']) ? $_GET['url'] : '/';

// Thực hiện phân phối và nhận phản hồi
try {
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);
    echo $response;
} catch (HttpRouteNotFoundException $e) {
    // Xử lý lỗi đường dẫn không tìm thấy
    echo '404 Not Found';
} catch (Exception $e) {
    // Xử lý lỗi khác
    echo 'An error occurred: ' . $e->getMessage();
}
?>
