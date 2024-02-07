<section class="text-gray-700 body-font overflow-hidden bg-white">
    <div class="container px-5 py-24 mx-auto">
        <div class="lg:w-4/5 mx-auto flex flex-wrap">
            <img alt="ecommerce" class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200" src="<?= 'data:image/jpeg;base64,' . $product['image'] ?>" style="height: 337px;">
            <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                <h2 class="text-sm title-font text-gray-500 tracking-widest">BRAND NAME</h2>
                <h1 class="text-gray-900 text-3xl title-font font-medium mb-1"><?= $product['name'] ?></h1>
                <div class="flex mb-4">
                    <span class="flex items-center">
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                        </svg>
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                        </svg>
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                        </svg>
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                        </svg>
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                        </svg>
                        <span class="text-gray-600 ml-3"><?= $product['views'] ?? "1000" ?> Reviews</span>
                    </span>
                    <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200">
                        <a class="text-gray-500">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                            </svg>
                        </a>
                        <a class="ml-2 text-gray-500">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                            </svg>
                        </a>
                        <a class="ml-2 text-gray-500">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                            </svg>
                        </a>
                    </span>
                </div>
                <p class="leading-relaxed"><?= $product['description'] ?></p>
                <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">
                    <div class="flex items-center">
                        <span class="mr-3">Quantity</span>

                        <div x-data="{ productQuantity: 1 }">
                            <label for="Quantity" class="sr-only"> Quantity </label>

                            <div class="flex items-center rounded border border-gray-200">
                                <button type="button" x-on:click="productQuantity--" :disabled="productQuantity === 0" class="h-10 w-10 leading-10 text-gray-600 transition hover:opacity-75">
                                    &minus;
                                </button>

                                <input type="number" id="Quantity" x-model="productQuantity" class="h-10 w-16 border-transparent text-center [-moz-appearance:_textfield] sm:text-sm [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none" />

                                <button type="button" x-on:click="productQuantity++" class="h-10 w-10 leading-10 text-gray-600 transition hover:opacity-75">
                                    &plus;
                                </button>
                            </div>
                        </div>

                    </div>

                    <div class="flex ml-6 items-center">
                        <span class="mr-3">Size</span>
                        <div class="relative">
                            <select class="rounded border appearance-none border-gray-400 py-2 focus:outline-none focus:border-red-500 text-base pl-3 pr-10">
                                <option>SM</option>
                                <option>M</option>
                                <option>L</option>
                                <option>XL</option>
                            </select>
                            <span class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </div>
                    </div>

                </div>
                <div class="flex">

                    <span class="title-font font-medium text-2xl text-gray-900">$<?= $product['price'] ?>.00</span>
                    <button class="flex ml-auto text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded">Mua Ngay</button>
                    <button class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="mt-16 mb-16">
    <h3 class="text-gray-600 text-2xl font-medium text-center">Sản phẩm tương tự</h3>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4 cursor-pointer">
                <?php foreach ($productCategory as $key => $value) :  ?>
                    <div class="lg:w-1/4 p-4 w-1/2">
                        <a class="block relative h-48 rounded overflow-hidden" href="?act=detail&id=<?= $value['id'] ?>">
                            <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="<?= 'data:image/jpeg;base64,' . $value['image'] ?>">
                        </a>
                        <div class="mt-4 flex justify-between">
                            <div class="left">
                                <a href="?act=detail&id=<?= $value['id'] ?>">
                                    <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                                    <h2 class="text-gray-900 title-font text-lg font-medium"><?= $value['name'] ?></h2>
                                    <p class="mt-1">$<?= $value['price'] ?></p>
                                </a>

                            </div>
                            <div class="right">
                                <a href="?act=cart" class="btn"><i class="fa-solid fa-bag-shopping" style="color: #B197FC;"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>


<div class="container mx-auto">
    <h1 class="font-mono text-xl font-bold ml-16">Đánh giá</h1>
    <div class=" flex justify-center">
        <div class="w-11/12 bg-white rounded-lg border p-2 my-4 mx-6">

            <div class="flex flex-col">
                <?php if (!empty($dataComment)) : ?>

                    <?php foreach ($dataComment as $key => $value) : ?>
                        <div class="border rounded-md p-3 ml-3 my-3">
                            <div class="flex gap-3 items-center">
                                <img src="<?= !empty($value['user_image']) ? 'data:image/jpeg;base64,' . $value['user_image'] : "https://i.pinimg.com/564x/92/26/5c/92265c40c8e428122e0b32adc1994594.jpg" ?>" class="object-cover w-8 h-8 rounded-full 
                                    border-2 border-emerald-400  shadow-emerald-400
                                    ">
                                <h3 class="font-bold">
                                    <?= $value['user_name'] ?>
                                </h3>
                            </div>
                            <p class="text-gray-600 mt-2">
                                <?= $value['comment_content'] ?>
                            </p>
                        </div>
                    <?php endforeach; ?>

                <?php else :  ?>
                    <h1 class="border rounded-md p-3 ml-3 my-3 font-bold">Chưa có comment nào</h1>
                <?php endif; ?>
            </div>

            <?php
            // echo "<pre>";
            // print_r($dataComment);
            // echo "</pre>";

            // echo "id product" . $_GET['id'];

            // echo "<pre>";
            // print_r($_SESSION['user']);
            // echo "</pre>";
            ?>

            <!-- kiểm tra login -> comment -->
            <?php if (isset($_SESSION['user']['is_login'])) :  ?>

                <form action="?act=handleComment" method="post">
                    <!-- id product -->
                    <input type="text" class="hidden" value="<?= $_GET['id'] ?? null ?>" name="id_product">
                    <!-- id user -->
                    <input type="text" class="hidden" value="<?= $_SESSION['user']['id'] ?? null ?>" name="id_user">

                    <div class="w-full px-3 my-2">

                        <textarea class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" name="comment" placeholder='Type Your Comment' required></textarea>
                        <span class="label-text-alt text-error"><?= $_SESSION['errors']['comment'] ?? null; ?></span>

                    </div>

                    <div class="w-full flex justify-end px-3">
                        <input type='submit' class="px-2.5 py-1.5 rounded-md text-white text-sm bg-indigo-500 cursor-pointer" value='Post Comment'>
                    </div>
                </form>


            <?php else : ?>
                <div class="ml-5 my-5">
                    <a class="link link-hover font-bold p-3" href="?act=login">Đăng nhập để sử dụng dịch vụ comment</a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
