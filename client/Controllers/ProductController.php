<?php
require_once "./client/Models/Product.php";
require_once "./client/Models/Category.php";

function renderProducts()
{
    $iddm = $_GET['iddm'] ?? null;
    // $data = getAll();

    if ($iddm) {
        switch ($iddm) {
            case $iddm:
                $data = getIdCategory($iddm);
                break;

            default:
                $data = getAll();
        }
    } else {
        $data = getAll();
    }

    $category = getAllCategory();
    require_once "./client/Views/products.php";
}

function renderDetail($id): void
{
    $product = getById($id);
    $productCategory = getProductsCategory($product['id_category'], $id);
    if (empty($product)) {
        echo 'Sản phẩm không tồn tại!';
        exit();
    }

    if(isset($id)){
        updateView($id);
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
//         $cartCount = count($_SESSION['cart']);
//         // Trả về số lượng sản phẩm của giỏ hàng dưới dạng JSON
//         echo json_encode(['cartCount' => $cartCount]);
//     } else {
//         echo 'Yêu cầu không hợp lệ';
//     }

//     // echo count($_SESSION['cart']);

// }
