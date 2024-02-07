<div class="container mx-auto py-8">
    <form class="w-full max-w-sm mx-auto bg-white p-8 rounded-md shadow-md" action="?act=handleUpdateUser" method="post" enctype="multipart/form-data">
        <input type="text" name="id" value="<?= $data['id'] ?>" class="hidden">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Username</label>
            <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" type="text" name="username" value="<?= $data['username'] ?>">
            <span class="label-text-alt text-error"><?= $_SESSION['errors']['username'] ?? null; ?></span>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Email</label>
            <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" type="email" name="email" value="<?= $data['email'] ?>">
            <span class="label-text-alt text-error"><?= $_SESSION['errors']['email'] ?? null; ?></span>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Password</label>
            <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" type="password" name="password" value="<?= $data['password'] ?>">
            <span class="label-text-alt text-error"><?= $_SESSION['errors']['password'] ?? null; ?></span>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Address</label>
            <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" type="text" name="address" value="<?= $data['address'] ?>">
            <span class="label-text-alt text-error"><?= $_SESSION['errors']['address'] ?? null; ?></span>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Phone</label>
            <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" type="tel" name="phone" value="<?= $data['tel'] ?>">
            <span class="label-text-alt text-error"><?= $_SESSION['errors']['tel'] ?? null; ?></span>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Image</label>
            <input type="file" class="file-input file-input-bordered w-full max-w-xs" name="image" />
            <span class="label-text-alt text-error"><?= $_SESSION['errors']['image'] ?? null; ?></span>
        </div>

        <input type="text" value="<?= $data['image'] ?>" name="old__image" class="hidden">

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Role</label>
            <label class="form-control w-full max-w-xs">
                <select class="select select-bordered" name="role">
                    <option disabled selected value="<?= $data['role'] ? '1' : '0' ?>"><?= !empty($data['role']) ? 'Admin' : 'User' ?></option>
                    <option value="1">Admin</option>
                    <option value="0">User</option>
                </select>
            </label>
            <span class="label-text-alt text-error"><?= $_SESSION['errors']['role'] ?? null; ?></span>
        </div>
        <button class="w-full bg-indigo-500 text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-indigo-600 transition duration-300" type="submit" name="submit">Submit</button>
    </form>
</div>