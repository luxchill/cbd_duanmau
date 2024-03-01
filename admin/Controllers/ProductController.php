<?php

require_once "./Models/Products.php";
require_once "./Models/Category.php";


function renderProducts($page)
{
    $limit = 6;
    $initial_page = ($page - 1) * $limit;
    $data = getAll($limit, $initial_page);
    $total_rows = getTotalPageProducts();
    $total_pages = ceil($total_rows / $limit);
    require_once "./Views/products/table.php";
}

function updateProduct($id)
{
    $data = selectUpdate($id);
    $category = getAllCategory();

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $oldImage = $_POST['old__image'];
        $image = $_FILES['image']['tmp_name'];
        $description = $_POST['description'];
        $categoryName = $_POST['category'] ?? $data['c_id'];

        if(empty($name)){
            $_SESSION['errors']['name'] = 'Vui lòng nhập name product';
        }else{
            unset($_SESSION['errors']['name']);
        }

        if(empty($price)){
            $_SESSION['errors']['price'] = 'Vui lòng nhập price product';
        }else{
            unset($_SESSION['errors']['price']);
        }

        if(empty($description)){
            $_SESSION['errors']['description'] = 'Vui lòng nhập description product';
        }else{
            unset($_SESSION['errors']['description']);
        }

        $imageSaveDb = '';

        if(empty($image)){
            $imageSaveDb = $oldImage;
        }else{
            $img = file_get_contents($image);
            $imgBase64 = base64_encode($img);
            $imageSaveDb = $imgBase64;
        }

        if(!empty($_SESSION['errors'])){
            header('location: ?act=updatesp&id=' . $id);
        }else{
            updatePro($id, $name, $price, $imageSaveDb, $description, $categoryName);
            header('location: ?act=products');
        }


    }

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
