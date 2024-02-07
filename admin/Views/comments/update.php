
<div class="container mx-auto py-8">
    <form class="w-full max-w-sm mx-auto bg-white p-8 rounded-md shadow-md" action="?act=handleupdatecomment" method="post" enctype="multipart/form-data">
        <input type="text" class="hidden" value="<?= $data['comment_id'] ?>" name="id">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Content</label>
            <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" type="text" name="content" value="<?= $data['comment_content'] ?>">
                <span class="label-text-alt text-error"><?= $_SESSION['errors']['content'] ?? null; ?></span>
        </div>

        <button class="w-full bg-indigo-500 text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-indigo-600 transition duration-300" type="submit" name="submit">Submit</button>
    </form>
</div>
<a href="?act=comments" class="btn btn-success">Table</a>