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
                        <?= $value['id'] ?>
                    </th>
                    <th>
                        <?= $value['name'] ?>
                    </th>
                    <th>
                        <a href="?act=updatecategory&id=<?= $value['id'] ?>" class="btn btn-success"><i class="ri-edit-2-line"></i></a>
                        <a href="?act=deletecategory&id=<?= $value['id'] ?>" class="btn btn-error" onclick="return confirm('Bạn có muốn xóa danh mục <?= $value['name'] . ' ? ' ?>')"><i class="ri-delete-bin-line"></i></a>
                    </th>
                </tr>
            <?php endforeach;  ?>
        </tbody>
    </table>
</div>

<a href="?act=createdm" class="btn btn-success">Create Category</a>