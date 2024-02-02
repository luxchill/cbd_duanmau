<div class="container mx-auto py-8">
    <form class="w-full max-w-sm mx-auto bg-white p-8 rounded-md shadow-md" action="?act=handleUser" method="post" enctype="multipart/form-data">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Username</label>
            <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" type="text" name="username" placeholder="Nhập tên của bạn">
                <span class="label-text-alt text-error"><?= $_SESSION['errors']['username'] ?? null; ?></span>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Email</label>
            <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" type="email" name="email" placeholder="Nhập email">
            <span class="label-text-alt text-error"><?= $_SESSION['errors']['email'] ?? null; ?></span>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Password</label>
            <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" type="password" name="password" placeholder="Nhập password">
            <span class="label-text-alt text-error"><?= $_SESSION['errors']['password'] ?? null; ?></span>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Address</label>
            <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" type="text" name="address" placeholder="Nhập địa chỉ">
            <span class="label-text-alt text-error"><?= $_SESSION['errors']['address'] ?? null; ?></span>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Phone</label>
            <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" type="tel" name="phone" placeholder="Nhập phone">
            <span class="label-text-alt text-error"><?= $_SESSION['errors']['phone'] ?? null; ?></span>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Image</label>
            <input type="file" class="file-input file-input-bordered w-full max-w-xs"     name="image"  />
            <span class="label-text-alt text-error"><?= $_SESSION['errors']['image'] ?? null; ?></span>
        </div>
        <button class="w-full bg-indigo-500 text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-indigo-600 transition duration-300" type="submit" name="submit">Submit</button>
    </form>
</div>