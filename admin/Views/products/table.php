<div class="overflow-x-auto" style="height: 85vh;">
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

<div class="flex justify-center">
    <div class="join">
        <input class="join-item btn btn-square" type="radio" name="options" aria-label="1" checked />
        <input class="join-item btn btn-square" type="radio" name="options" aria-label="2" />
        <input class="join-item btn btn-square" type="radio" name="options" aria-label="3" />
        <input class="join-item btn btn-square" type="radio" name="options" aria-label="4" />
    </div>
</div>

<a href="?act=createsp" class="btn btn-success">Create Product</a>