<?php

session_start();
ob_start();
require_once "./Views/includes/header.php";
require_once "../connect.php";
require_once "./Controllers/DashboardController.php";
require_once "./Controllers/CategoryController.php";
require_once "./Controllers/ProductController.php";
require_once "./Controllers/UserController.php";
require_once "./Controllers/AuthController.php";
require_once "./Controllers/CommentController.php";

// echo "<pre>";
// print_r($_SESSION['user']);
// echo "</pre>";


// $baseUrl = 'http://localhost/duanmau-mvc/admin';
$action = $_GET['act'] ?? null;
$page = $_GET['page'] ?? 1;

match ($action) {
    // route main
    'category' => renderCategory(),
    'products' => renderProducts(),
    'users' => renderUsers(),
    'comments' => renderComment($page),
    'adduser' => renderCreateUser(),
    // route handles
    'updatesp' => updateProduct($_GET['id']),
    'deletesp' => deleteProduct($_GET['id']),
    'createsp' => renderCreateProduct(),
    'addsp' => addProduct($_POST['name'], $_POST['price'], $_FILES['image']['tmp_name'], $_POST['desc'], $_POST['category']),
    // logic category
    'createdm' => renderCreateCategory(),
    'adddm' => addCategory($_POST['name']),
    'updatecategory' => renderUpdateCategory($_GET['id']),
    'changecategory' => handleUpdateCategory($_POST['id'], $_POST['name']),
    'deletecategory' => handleDeleteCategory($_GET['id']),
    // logic comment
    'deletecomment' => handleDeleteComment($_GET['id']),
    'updatecm' => renderUpdateComment($_GET['id']),
    'handleupdatecomment' => handleUpdateComment($_POST['id'], $_POST['content']),
    //logic users
    'handleUser' => handleCreateUser($_POST['username'], $_POST['email'], $_POST['password'], $_POST['address'], $_POST['phone'], $_FILES['image']['tmp_name']),
    'updateuser' => renderUpdateUser($_GET['id']),
    'deleteuser' => handleDeleteUser($_GET['id']),
    'handleUpdateUser' => handleUpdateUser($_POST['id'], $_POST['username'], $_POST['email'], $_POST['password'], $_POST['address'], $_POST['phone'], $_FILES['image']['tmp_name'] ?? null, $_POST['old__image']),
    'logout' => handleLogout(),
    default => renderDashboard()
};

require_once "../disconnect.php";
require_once "./Views/includes/footer.php";
