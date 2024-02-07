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

// function handleAddToCart()
// {

//     if (!isset($_SESSION['cart'])) {
//         // Nếu không có thì đi khởi tạo
//         $_SESSION['cart'] = [];
//     };

//     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//         // Lấy dữ liệu từ ajax đẩy lên
//         $productId = $_POST['id'];
//         $productName = $_POST['name'];
//         $productPrice = $_POST['price'];
//         $categoryName = $_POST['category'];

//         // Kiểm tra sản phẩm đã có trong giỏ hàng chưa
//         $index = false;
//         if (!empty($_SESSION['cart'])) {
//             $index = array_search($productId, array_column($_SESSION['cart'], 'id'));
//         }

//         // array_column() trích xuất một cột từ mảng giỏ hàng và trả về một mảng chứ giá trị của cột id
//         if ($index !== false) {
//             $_SESSION['cart'][$index]['quantity'] += 1;
//         } else {
//             // Nếu sản phẩm chưa tồn tại thì thêm mới vào giỏ hàng
//             $product = [
//                 'id' => $productId,
//                 'name' => $productName,
//                 'price' => $productPrice,
//                 'category' => $categoryName,
//                 'quantity' => 1
//             ];
//             $_SESSION['cart'][] = $product;
//             // var_dump($_SESSION['cart']);die;
//         }
//         // Trả về số lượng sản phẩm của giỏ hàng
//         // echo count($_SESSION['cart']);
//     } else {
//         echo 'Yêu cầu không hợp lệ';
//     }

//     // echo count($_SESSION['cart']);
    
// }

