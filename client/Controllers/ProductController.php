<?php
require_once "./client/Models/Product.php";
require_once "./client/Models/Category.php";

function renderProducts()
{
    $data = getAll();
    $category = getAllCategory();
    require_once "./client/Views/products.php";
}

function renderDetail($id)
{
    $product = getById($id);
    $productCategory = getProductsCategory($product['id_category']);
    if (empty($product)) {
        echo 'Sản phẩm không tồn tại!';
        exit();
    }
    // echo  'Id product' . $id;

    $dataComment = renderComment($id);

    require_once "./client/Views/detail.php";
}

function handleComment($id_user, $id_product, $comment)
{
    echo $comment . "<br/>";
    echo "id_user: " . $id_user . "<br/>";
    echo "id_product: " . $id_product . "<br/>";
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $dateTime = date('H:i:s d-m-Y');

    if (empty($comment)) {
        $_SESSION['errors']['comment'] = 'Vui lòng nhập comment';
    } else {
        unset($_SESSION['errors']['comment']);
    }

    if (!empty($_SESSION['errors'])) {
        header("location: ?act=detail&id=" . $id_user);
    } else {
        insertComment($id_user, $id_product, $comment, $dateTime);
        header('location: ?act=detail&id=' . $id_product);
    }
}
