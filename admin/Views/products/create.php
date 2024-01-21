<div class="container mx-auto py-8">
    <form class="w-full max-w-sm mx-auto bg-white p-8 rounded-md shadow-md" action="?act=addsp" method="post" enctype="multipart/form-data">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Name</label>
            <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" type="text" name="name" placeholder="Nhập tên sản phẩm">
                <span class="label-text-alt text-error"><?= $_SESSION['errors']['name'] ?? null; ?></span>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Price</label>
            <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" type="tel" name="price" placeholder="Nhập giá sản phẩm">
            <span class="label-text-alt text-error"><?= $_SESSION['errors']['price'] ?? null; ?></span>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Image</label>
            <input type="file" class="file-input file-input-bordered w-full max-w-xs"     name="image"  />
            <span class="label-text-alt text-error"><?= $_SESSION['errors']['image'] ?? null; ?></span>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Description</label>
            <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" type="text" id="confirm-password" name="desc" placeholder="Nhập mô tả">
            <span class="label-text-alt text-error"><?= $_SESSION['errors']['desc'] ?? null; ?></span>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="confirm-password">Category</label>
            <select class="select select-bordered w-full max-w-xs" name="category">
                <option disabled selected>Hãy chọn danh mục</option>
                <?php foreach ($data as $key => $value) : ?>
                    <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
                <?php endforeach ?>
            </select>
            <span class="label-text-alt text-error"><?= $_SESSION['errors']['category'] ?? null; ?></span>
        </div>
        <button class="w-full bg-indigo-500 text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-indigo-600 transition duration-300" type="submit" name="submit">Submit</button>
    </form>
</div>
<a href="?act=products" class="btn btn-success">Table</a>