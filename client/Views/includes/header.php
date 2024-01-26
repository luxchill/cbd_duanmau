<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.6.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <link rel="stylesheet" href="./public/css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/keen-slider.min.css" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/12ffb45aae.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" referrerpolicy="no-referrer" />


    <!-- <script type="module" src="node_modules/@material-tailwind/html@latest/scripts/popover.js"></script> -->

    <!-- from cdn -->
    <script type="module" src="https://unpkg.com/@material-tailwind/html@latest/scripts/popover.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.1.0/remixicon.css" integrity="sha512-dUOcWaHA4sUKJgO7lxAQ0ugZiWjiDraYNeNJeRKGOIpEq4vroj1DpKcS3jP0K4Js4v6bXk31AAxAxaYt3Oi9xw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- cdn jquery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- <script src="./public/js/global.js"></script> -->

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <title>CBD Shop</title>
</head>

<body class="font-sans">

    <?php
    $active = $_GET['act'] ?? null; // get act check active
    ?>

    <div class="navbar bg-base-100">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a>Item 1</a></li>
                    <li>
                        <a>Parent</a>
                        <ul class="p-2">
                            <li><a>Submenu 1</a></li>
                            <li><a>Submenu 2</a></li>
                        </ul>
                    </li>
                    <li><a>Item 3</a></li>
                </ul>
            </div>
            <a class="btn btn-ghost text-xl">CBD</a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1 nav__menu">
                <li class="<?= ($active == 'home') ? 'active' : "" ?>"><a href="?act=home">Home</a></li>
                <li class="<?= ($active == 'products') ? 'active' : null ?>"><a href="?act=products">Products</a></li>
                <li class="<?= ($active == 'about') ? 'active' : null ?>"><a href="?act=about">About</a></li>
                <li class="<?= ($active == 'cart') ? 'active' : null ?>"><a href="?act=cart">Cart</a></li>
            </ul>
        </div>
        <div class="navbar-end gap-5 cursor-pointer">

            <div class="flex items-center gap-4">
                <div class="relative inline-flex">
                    <i class="ri-shopping-cart-line text-2xl"></i>
                    <span class="absolute rounded-full py-1 px-1 text-xs font-medium content-[''] leading-none grid place-items-center top-[4%] right-[2%] translate-x-2/4 -translate-y-2/4 bg-red-500 text-white min-w-[24px] min-h-[24px] count__cart">
                        <?= !empty($_SESSION['cart']) ? count($_SESSION['cart']) : 0 ?>
                    </span>
                </div>

                <div class="sm:flex sm:gap-4">
                    <?php if (!empty($_SESSION['user'])) :  // nếu k có ob_start() sẽ err header   
                    ?>
                        <div class="dropdown dropdown-end ">
                            <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                                <div class="w-10 rounded-full">
                                    <img alt="image user" src="https://cdn.sforum.vn/sforum/wp-content/uploads/2023/10/avatar-trang-2.jpg" />
                                </div>
                            </div>
                            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[2] p-2 shadow bg-base-100 rounded-box w-52">
                                <li>
                                    <a class="justify-between" href="?act=profile">
                                        Profile
                                        <span class="badge">New</span>
                                    </a>
                                </li>
                                <li><a href="?act=login">Settings</a></li>
                                <li><a href="?act=logout">Logout</a></li>
                            </ul>
                        </div>
                    <?php else : ?>
                        <a class="rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white shadow" href="?act=login">
                            Login
                        </a>

                        <div class="hidden sm:flex">
                            <a class="rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-teal-600" href="?act=register">
                                Register
                            </a>
                        </div>

                    <?php endif; ?>
                </div>

                <div class="block md:hidden">
                    <button class="rounded bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>