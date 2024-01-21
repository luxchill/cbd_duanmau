<?php
require_once "./client/Models/Product.php";

function renderProducts(){
    $data = getAll();
    require_once "./client/Views/products.php";
}

function renderDetail($id){
    $product = getById($id);

    if (empty($product)) {
        echo 'Sản phẩm không tồn tại!';
        exit();
    }

    require_once "./client/Views/detail.php";
}

?>