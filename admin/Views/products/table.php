<?php

$nextPage = $page + 1;
$prevPage = $page - 1;


?>

<div class="overflow-x-auto" style="height: 85vh;">
    <a href="?act=createsp" class="btn btn-success">Create Product</a>
    <table class="table">
        <!-- head -->
        <thead>
            <tr>
                <th>
                    <label>
                        <input type="checkbox" class="checkbox" />
                    </label>
                </th>
                <th>Id</th>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Views</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $key => $value) :  ?>
                <tr>
                    <th>
                        <label>
                            <input type="checkbox" class="checkbox" />
                        </label>
                    </th>
                    <th>
                        <?= $value['p_id'] ?>
                    </th>
                    <th>
                        <?= $value['p_name'] ?>
                    </th>
                    <th> <?= $value['p_price'] . "<b>$</b>" ?> </th>
                    <th>
                        <div class="avatar">
                            <div class="mask mask-squircle w-12 h-12">
                                <img src="<?= "data:image/jpeg;base64," . $value['p_image'] ?>" />
                            </div>
                        </div>
                    </th>
                    <th>
                        <?= ($value['p_views'] ?? 0) . ' <i class="ri-eye-line"></i>' ?>
                    </th>
                    <th>
                        <?= $value['c_name'] ?>
                    </th>
                    <th>
                        <a href="?act=updatesp&id=<?= $value['p_id'] ?>" class="btn btn-success"><i class="ri-edit-2-line"></i></a>
                        <a href="?act=deletesp&id=<?= $value['p_id'] ?>" class="btn btn-error" onclick="return confirm('Bạn có muốn xóa sản phẩm <?= $value['p_name'] . ' ? ' ?>')"><i class="ri-delete-bin-line"></i></a>
                    </th>
                </tr>

            <?php endforeach;  ?>
        </tbody>

    </table>
</div>

<ol class="flex justify-center gap-1 text-xs font-medium">
    <li>
        <a href="?act=products&page=<?= ($page > 1) ? $prevPage : "1" ?>" class="inline-flex h-8 w-8 items-center justify-center rounded border border-gray-100 bg-white text-gray-900 rtl:rotate-180">
            <span class="sr-only">Prev Page</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
        </a>
    </li>

    <?php
    for ($i = 1; $i <= $total_pages; $i++) :
    ?>
        <li>
            <a href="?act=products&page=<?= $i ?>" class="<?= ($i == $page) ? 'block h-8 w-8 rounded border-blue-600 bg-blue-600 text-center leading-8 text-white' : 'block h-8 w-8 rounded border border-gray-100 bg-white text-center leading-8 text-gray-900'  ?>">
                <?= $i ?>
            </a>
        </li>

    <?php endfor; ?>

    <li>
        <a href="?act=products&page=<?= ($page < $total_pages) ? $nextPage : $total_pages ?>" class="inline-flex h-8 w-8 items-center justify-center rounded border border-gray-100 bg-white text-gray-900 rtl:rotate-180">
            <span class="sr-only">Next Page</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
            </svg>
        </a>
    </li>
</ol>

<?php

echo $total_pages;

?>