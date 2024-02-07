<?php
session_start();
if (!isset($_SESSION['cart'])) {
    // Nếu không có thì đi khởi tạo
    $_SESSION['cart'] = [];
};

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy dữ liệu từ ajax đẩy lên
    $productId = $_POST['id'];
    $productName = $_POST['name'];
    $productPrice = $_POST['price'];
    $categoryName = $_POST['category'];
    $productImage = $_POST['image'];

    // Kiểm tra sản phẩm đã có trong giỏ hàng chưa
    $index = false;
    if (!empty($_SESSION['cart'])) {
        $index = array_search($productId, array_column($_SESSION['cart'], 'id'));
    }

    // array_column() trích xuất một cột từ mảng giỏ hàng và trả về một mảng chứ giá trị của cột id
    if ($index !== false) {
        $_SESSION['cart'][$index]['quantity'] += 1;
    } else {
        // Nếu sản phẩm chưa tồn tại thì thêm mới vào giỏ hàng
        $product = [
            'id' => $productId,
            'name' => $productName,
            'price' => $productPrice,
            'category' => $categoryName,
            'image' => $productImage,
            'quantity' => 1
        ];
        $_SESSION['cart'][] = $product;
        // var_dump($_SESSION['cart']);die;
    }
    // Trả về số lượng sản phẩm của giỏ hàng
    echo count($_SESSION['cart']);
    // $_SESSION['addToCart'] = 'Thêm sản phẩm thành công';
} else {
    echo 'Yêu cầu không hợp lệ';
}

?>
