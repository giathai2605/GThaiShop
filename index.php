<?php
@session_start();
require_once "env.php";
require_once "vendor/autoload.php";
require_once "commons/route.php";
//checkLogin();

use App\Controllers\ProductController;
use App\Controllers\CategoryController;
use App\Controllers\CommentController;
use App\Controllers\UserController;
use App\Models\Product;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;

