<?php

use Phroute\Phroute\RouteCollector;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();

// filter check đăng nhập
//$router->filter('auth', function(){
//    if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
//        header('location: ' . BASE_URL . 'login');die;
//    }
//});
// Define the auth filter
$router->filter('auth', function() {
    if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])) {
        header('location: ' . BASE_URL . 'login');
        exit;
    }
});
$router->get('login', [App\Controllers\LoginController::class, 'index']);   // đường dẫn đến trang login
$router->post('check-login', [App\Controllers\LoginController::class, 'postLogin']);
//checkLogin();


// Define a route that requires authentication
$router->group(['before' => 'auth'], function($router) {
    $router->get('/', [App\Controllers\ProductController::class, 'index']);
    $router->get('list-product', [App\Controllers\ProductController::class, 'index']);
    $router->get('fill-product/{cate_id}', [App\Controllers\ProductController::class, 'fillProduct']);
    $router->get('add-product', [App\Controllers\ProductController::class, 'addProduct']);
    $router->post('add-product-post', [App\Controllers\ProductController::class, 'postProduct']);
    $router->get('edit-product/{id}', [App\Controllers\ProductController::class, 'editProduct']);
    $router->post('update-product/{id}', [App\Controllers\ProductController::class, 'updateProduct']);
    $router->get('delete-product/{id}', [App\Controllers\ProductController::class, 'deleteProduct']);
    $router->post('search-product', [App\Controllers\ProductController::class, 'searchProduct']);
// Router Category
    $router->get('list-cate', [App\Controllers\CategoryController::class, 'index']);
    $router->get('add-cate', [App\Controllers\CategoryController::class, 'addCategory']);
    $router->post('add-cate-post', [App\Controllers\CategoryController::class, 'postCategory']);
    $router->get('edit-cate/{id}', [App\Controllers\CategoryController::class, 'editCategory']);
    $router->post('update-cate/{id}', [App\Controllers\CategoryController::class, 'updateCategory']);
    $router->get('delete-cate/{id}', [App\Controllers\CategoryController::class, 'deleteCategory']);
// Router User
    $router->get('list-user', [App\Controllers\UserController::class, 'index']);
    $router->get('add-user', [App\Controllers\UserController::class, 'addUser']);
    $router->post('add-user-post', [App\Controllers\UserController::class, 'postUser']);
    $router->get('edit-user/{id}', [App\Controllers\UserController::class, 'editUser']);
    $router->post('update-user/{id}', [App\Controllers\UserController::class, 'updateUser']);
    $router->get('delete-user/{id}', [App\Controllers\UserController::class, 'deleteUser']);
    $router->post('search-user', [App\Controllers\UserController::class, 'searchUser']);
//
    $router->get('logout', [App\Controllers\LoginController::class, 'logout']);
});



// đường dẫn đến hàm xử lý login
// bắt đầu định nghĩa ra các đường dẫn

// Router Products







# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;


?>