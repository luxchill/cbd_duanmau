
<div class="container mx-auto py-8">
    <form class="w-full max-w-sm mx-auto bg-white p-8 rounded-md shadow-md" action="" method="post" enctype="multipart/form-data">
        <input type="text" name="id" value="<?= $data['p_id'] ?>" class="hidden">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Name</label>
            <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" type="text" name="name" value="<?= $data['p_name'] ?>">
            <span class="label-text-alt text-error"><?= $_SESSION['errors']['name'] ?? null; ?></span>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Price</label>
            <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" type="tel" name="price" value="<?= $data['p_price'] ?>">
            <span class="label-text-alt text-error"><?= $_SESSION['errors']['price'] ?? null; ?></span>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Image</label>
            <input type="file" class="file-input file-input-bordered w-full max-w-xs" name="image" />
            <span class="label-text-alt text-error"><?= $_SESSION['errors']['image'] ?? null; ?></span>
        </div>

        <input type="text" value="<?= $data['p_image'] ?>" name="old__image" class="hidden">

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Description</label>
            <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" type="text" name="description" value="<?= $data['p_description'] ?>">
            <span class="label-text-alt text-error"><?= $_SESSION['errors']['description'] ?? null; ?></span>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Category</label>
            <label class="form-control w-full max-w-xs">
                <select class="select select-bordered" name="category">
                    <option disabled selected value="<?= $data['c_id'] ?>"><?= $data['c_name'] ?></option>
                    <?php foreach($category as $key => $value) : ?>
                    <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </label>
            <span class="label-text-alt text-error"><?= $_SESSION['errors']['role'] ?? null; ?></span>
        </div>


        <button class="w-full bg-indigo-500 text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-indigo-600 transition duration-300" type="submit" name="submit">Submit</button>
    </form>
</div>