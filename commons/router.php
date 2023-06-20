<?php

use Phroute\Phroute\Dispatcher;
use Phroute\Phroute\RouteCollector;

$url = $_GET['url'] ?? '/';
$router = new RouteCollector();
$router->filter('auth', function () {
	if (!isset($_SESSION["auth"]) || empty($_SESSION["auth"])) {
		header('location: ' . route('login'));
		die;
	}
});
$router->get('test', [App\Controllers\AuthController::class, 'test']);
$router->get('login', [App\Controllers\AuthController::class, 'renderLogin']);
$router->post('login/verify', [App\Controllers\AuthController::class, 'handleLogin']);
$router->get('logout', [App\Controllers\AuthController::class, 'logout']);
$router->get('register', [App\Controllers\AuthController::class, 'renderRegister']);
$router->post('register/handle', [App\Controllers\AuthController::class, 'handleRegister']);

$router->group(['before' => 'auth'], function () use ($router) {
	$router->get('/', [App\Controllers\Admin\PostController::class, 'renderListPost']);
});
$router->group(['prefix' => 'admin'], function () use ($router) {
	$router->group(['before' => 'auth'], function () use ($router) {
		// -------------------------------CRUD Account--------------------------------//
		$router->get('user/list', [App\Controllers\Admin\UserController::class, 'renderListUser']);
		$router->get('user/create', [App\Controllers\Admin\UserController::class, 'renderCreateUser']);
		$router->get('user/update/{id}', [App\Controllers\Admin\UserController::class, 'renderUpdateUser']);
		$router->post('user/create/handle', [App\Controllers\Admin\UserController::class, 'handleCreateUser']);
		$router->post('user/update/handle/{id}', [App\Controllers\Admin\UserController::class, 'handleUpdateUser']);
		$router->get('delete-user/{id}', [App\Controllers\Admin\UserController::class, 'deleteUser']);

		// --------------------------------Change password-------------------------------------------//
		$router->get('change-password/{id}', [App\Controllers\Admin\UserController::class, 'renderChangePassword']);
		$router->post('change-password/handle/{id}', [App\Controllers\Admin\UserController::class, 'handleChangePassword']);

        // --------------------------------CRUD Category-------------------------------------------//

        $router->get('category/list', [App\Controllers\Admin\CategoryController::class, 'renderListCategory']);
        $router->get('category/create', [App\Controllers\Admin\CategoryController::class, 'renderCreateCategory']);
        $router->get('category/update/{id}', [App\Controllers\Admin\CategoryController::class, 'renderUpdateCategory']);
        $router->post('category/create/handle', [App\Controllers\Admin\CategoryController::class, 'handleCreateCategory']);
        $router->post('category/update/handle/{id}', [App\Controllers\Admin\CategoryController::class, 'handleUpdateCategory']);
        $router->get('delete-category/{id}', [App\Controllers\Admin\CategoryController::class, 'deleteCategory']);



	});
});


$router->get('back', function () {
	if (isset($_SERVER['HTTP_REFERER'])) {
		header("Location: " . $_SERVER['HTTP_REFERER']);
	} else {
		header("Location: /");
	}
});

$dispatcher = new Dispatcher($router->getData());

try {
	$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);
	if ($response instanceof PDOStatement) {
		$data = $response->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($data);
	} else {
		echo $response;
	}
} catch (\Phroute\Phroute\Exception\HttpRouteNotFoundException $e) {
	redirect('errors', 'Không tìm thấy trang', '404');
} catch (\Phroute\Phroute\Exception\HttpMethodNotAllowedException $e) {
	header("HTTP/1.0 405 Method Not Allowed");
	redirect('errors', 'Phương thức không được cho phép', '404');
}