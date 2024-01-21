<?php

require_once "./Models/Products.php";
require_once "./Models/Category.php";


function renderProducts()
{
    $data = getAll();
    require_once "./Views/products/table.php";
}

function updateProduct($id)
{
    $data = selectUpdate($id);
    require_once "./Views/products/update.php";
}

function deleteProduct($id)
{
    delete($id);
    header("location: ?act=products");
}

function renderCreateProduct()
{
    $data = getAllCategory();
    require_once "./Views/products/create.php";
}

function addProduct($name, $price, $image, $desc, $category)
{

    if (empty($name)) {
        $_SESSION['errors']['name'] = 'Vui lòng nhập name';
    } else {
        unset($_SESSION['errors']['name']);
    }

    if (empty($price)) {
        $_SESSION['errors']['price'] = 'Vui lòng nhập price';
    } else {
        unset($_SESSION['errors']['price']);
    }

    if (empty($image)) {
        $_SESSION['errors']['image'] = 'Vui lòng tải image';
    } else {
        unset($_SESSION['errors']['image']);
    }

    if (empty($desc)) {
        $_SESSION['errors']['desc'] = 'Vui lòng nhập desc';
    } else {
        unset($_SESSION['errors']['desc']);
    }

    if (empty($category)) {
        $_SESSION['errors']['category'] = 'Vui lòng chọn category';
    } else {
        unset($_SESSION['errors']['category']);
    }

    if (!empty($_SESSION['errors'])) {
        header('location: ?act=createsp');
    } else {
        $img = file_get_contents($image);
        $imgB64 = base64_encode($img);
        insertProduct($name, $price, $imgB64, $desc, $category);
        header("location: ?act=products");
    }
}
