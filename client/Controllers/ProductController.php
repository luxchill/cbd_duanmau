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

    require_once "./client/Views/detail.php";
}
