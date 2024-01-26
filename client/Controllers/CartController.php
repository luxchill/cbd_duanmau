<?php
require_once "./client/Models/Cart.php";
function renderCart()
{
    // $data = getAllCart();
    require_once "./client/Views/cart.php";
}

function renderAbout()
{
    require_once "./client/Views/about.php";
}

// function handleAddToCart($id, $name, $price, $image)
// {

//     if (!isset($_SESSION['cart']) || !is_array($_SESSION['cart'])) {
//         $_SESSION['cart'] = array();
//     }

//     // kiểm tra sản phẩm đã có trong session cart hay chưa
//     $index = array_search($id, array_column($_SESSION['cart'], 'id'));

//     if ($index !== false) {
//         $_SESSION['cart'][$index]['quantity'] += 1;
//     } else {
//         $products = [
//             'id' => $id,
//             'name' => $name,
//             'price' => $price,
//             'image' => $image,
//             'quantity' => 1
//         ];

//         $_SESSION['cart'][] = $products;
//     }

//     echo count($_SESSION['cart']);
// }

function handleAddToCart($id, $name, $price, $image)
{
    if (!isset($_SESSION['cart']) || !is_array($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // kiểm tra sản phẩm đã có trong session cart hay chưa
    $index = array_search($id, array_column($_SESSION['cart'], 'id'));

    if ($index !== false) {
        $_SESSION['cart'][$index]['quantity'] += 1;
    } else {
        $products = [
            'id' => $id,
            'name' => $name,
            'price' => $price,
            'image' => $image,
            'quantity' => 1
        ];

        $_SESSION['cart'][] = $products;
    }

    echo count($_SESSION['cart']);
}

