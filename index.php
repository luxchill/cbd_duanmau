<?php
session_start();
require_once "./connect.php";
require_once "./client/Views/includes/header.php";
// require controller
require_once "./client/Controllers/HomeController.php";
require_once "./client/Controllers/ProductController.php";
require_once "./client/Controllers/AuthController.php";
require_once "./client/Controllers/CartController.php";



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
    // route handle
    'handleRegister' => handleRegister($_POST['username'], $_POST['email'], $_POST['password']),
    'handleLogin' => handleLogin($_POST['email'], $_POST['password']),
    default => renderHome(),
};





require_once "./client/Views/includes/footer.php";
require_once "./disconnect.php";
