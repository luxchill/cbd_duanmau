<?php

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";
// showMessage('addToCart', 'success');


?>


<!-- component -->
<section class="bg-white dark:bg-gray-900 mb-10 h-screen">
    <div class="container px-6 py-8 mx-auto">
        <div class="lg:flex lg:-mx-2">
            <div class="space-y-3 lg:w-1/5 lg:px-2 lg:space-y-4">
                <h1 class="font-mono text-xl">Danh Mục</h1>
                <a href="?act=products" class="block font-medium text-gray-500 dark:text-gray-300 hover:underline">Tất Cả</a>
                <?php foreach ($category as $key => $value) :  ?>
                    <a href="?act=products&iddm=<?= $value['id'] ?>" class="block font-medium text-gray-500 dark:text-gray-300 hover:underline"><?= $value['name'] ?></a>
                <?php endforeach; ?>
            </div>

            <div class="mt-6 lg:mt-0 lg:px-2 lg:w-4/5 ">
                <div class="flex items-center justify-between text-sm tracking-widest uppercase ">
                    <p class="text-gray-500 dark:text-gray-300"><?= count($data) ?> Items</p>
                    <div class="flex items-center">
                        <p class="text-gray-500 dark:text-gray-300">Sort</p>
                        <select class="font-medium text-gray-700 bg-transparent dark:text-gray-500 focus:outline-none">
                            <option value="#">Recommended</option>
                            <option value="#">Size</option>
                            <option value="#">Price</option>
                        </select>
                    </div>
                </div>

                <section class="text-gray-600 body-font">
                    <div class="container px-5 py-24 mx-auto">
                        <div class="flex flex-wrap -m-4 cursor-pointer">
                            <?php foreach ($data as $key => $value) :  ?>
                                <div class="lg:w-1/4 p-4 w-1/2">
                                    <a class="block relative h-48 rounded overflow-hidden" href="?act=detail&id=<?= $value['p_id'] ?>">
                                        <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="<?= 'data:image/jpeg;base64,' . $value['p_image'] ?>">
                                    </a>
                                    <div class="mt-4 flex justify-between">
                                        <div class="left">
                                            <a href="?act=detail&id=<?= $value['p_id'] ?>">
                                                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1"><?= $value['c_name'] ?></h3>
                                                <h2 class="text-gray-900 title-font text-lg font-medium"><?= $value['p_name'] ?></h2>
                                                <p class="mt-1">$<?= $value['p_price'] ?></p>
                                            </a>

                                        </div>
                                        <div class="right">
                                            <button class="btn" data-id="<?= $value['p_id'] ?>" onclick="addToCart('<?= $value['p_id'] ?>', '<?= $value['p_name'] ?>', '<?= $value['p_price'] ?>', '<?= $value['c_name'] ?>', '<?= $value['p_image'] ?>')"><i class="fa-solid fa-bag-shopping" style="color: #B197FC;"></i></button>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>

<script>
    const handleDetail = (id) => {
        window.location = `?act=detail&id=${id}`;
    }

    let totalProduct = document.querySelector('.count__cart');

    function addToCart(productId, productName, productPrice, categoryName, productImage) {
        $.ajax({
            type: 'POST',
            // Đường dẫ tới tệp PHP xử lý dữ liệu
            url: './client/Controllers/HandleAddToCart.php',
            data: {
                id: productId,
                name: productName,
                price: productPrice,
                category: categoryName,
                image: productImage
            },
            success: function(response) {
                // console.log(response);
                totalProduct.innerText = response;
                // alert('Bạn đã thêm sản phẩm vào giỏ hàng thành công!')
                toastr.success('Thêm sản phẩm thành công');
            },
            error: function(error) {
                console.log(error);
            }
        });
    }


    // totalProdut.innerHTML = '12';
</script>