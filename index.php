<?php
session_start();
ob_start();
require_once "./client/Views/includes/header.php";
require_once "./connect.php";
// require controller
require_once "./client/Controllers/HomeController.php";
require_once "./client/Controllers/ProductController.php";
require_once "./client/Controllers/AuthController.php";
require_once "./client/Controllers/CartController.php";
require_once "./client/Controllers/ProfileController.php";
require_once "./client/Toast/toastMess.php";

$baseUrl = 'http://localhost/duanmau-mvc';
$action = $_GET['act'] ?? null;

match ($action) {
    // route main
    'home' => renderHome(),
    'products' => renderProducts(),
    'detail' => renderDetail($_GET['id']),
    'login' => renderLogin(),
    'register' => renderRegister(),
    'cart' => renderCart(),
    'profile' => renderProfile(),
    'about' => renderAbout(),
    'forgot' => renderFogot(),
    // route handle
    'handleRegister' => handleRegister($_POST['username'], $_POST['email'], $_POST['password']),
    'handleLogin' => handleLogin($_POST['email'], $_POST['password']),
    'changeImage' => handleChangeImage($_POST['id'], $_FILES['image']['tmp_name']),
    // 'handleAddToCart' => handleAddToCart($_POST['id'] ?? null ,$_POST['name'] ?? null,$_POST['price'] ?? null,$_POST['image'] ?? null),
    // 'handleAddToCart' => handleAddToCart(),
    'handleComment' => handleComment($_POST['id_user'],$_POST['id_product'],$_POST['comment']),
    'logout' => handleLogout(),
    default => renderHome(),
};


require_once "./client/Views/includes/footer.php";
require_once "./disconnect.php";
