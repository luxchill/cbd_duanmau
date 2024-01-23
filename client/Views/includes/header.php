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

    <title>CBD Shop</title>
</head>

<body>

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
            <ul class="menu menu-horizontal px-1">
                <li><a href="?act=home">Home</a></li>
                <li><a href="?act=products">Products</a></li>
                <li><a href="?act=about">About</a></li>
                <li><a href="?act=cart">Cart</a></li>
            </ul>
        </div>
        <div class="navbar-end gap-5 cursor-pointer">

            <div class="flex items-center gap-4">
                <div class="sm:flex sm:gap-4">
                    <?php if (!empty($_SESSION['user'])) :  // nếu k có ob_start() sẽ err header   
                    // ob_start()
                    ?>
                        <div class="dropdown dropdown-end ">
                            <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                                <div class="w-10 rounded-full">
                                    <img alt="image user" src="<?= 
                                    
                                    $_SESSION['user']['image'] ? "data:image/jpeg;base64," . $_SESSION['user']['image'] : "https://cdn.sforum.vn/sforum/wp-content/uploads/2023/10/avatar-trang-2.jpg"
                                    
                                    
                                    ?>" />
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