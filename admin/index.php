<?php

session_start();

require_once "./Views/includes/header.php";
require_once "../connect.php";
require_once "./Controllers/DashboardController.php";
require_once "./Controllers/CategoryController.php";
require_once "./Controllers/ProductController.php";
require_once "./Controllers/UserController.php";
require_once "./Controllers/AuthController.php";




// $baseUrl = 'http://localhost/duanmau-mvc/admin';
$action = $_GET['act'] ?? null;

match ($action) {
    // route main
    'category' => renderCategory(),
    'products' => renderProducts(),
    'users' => renderUsers(),
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
    'logout' => handleLogout(),
    default => renderDashboard()
};

require_once "../disconnect.php";
require_once "./Views/includes/footer.php";
