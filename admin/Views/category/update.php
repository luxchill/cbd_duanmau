<div class="container mx-auto py-8">
    <h1 class="text-center font-bold">Update</h1>
    <form class="w-full max-w-sm mx-auto bg-white p-8 rounded-md shadow-md" action="?act=changecategory" method="post" enctype="multipart/form-data">
        <input class="hidden w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" type="text" name="id" value="<?= $data['id'] ?>">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Name</label>
            <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" type="text" name="name" value="<?= $data['name'] ?>">
            <span class="label-text-alt text-error"><?= $_SESSION['errors']['name'] ?? null; ?></span>
        </div>
        <button class="w-full bg-indigo-500 text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-indigo-600 transition duration-300" type="submit" name="submit">Submit</button>
    </form>
</div>
<a href="?act=category" class="btn btn-success">Table</a>