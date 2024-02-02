<?php

// echo "<pre>";
// print_r($data);
// echo "</pre>";

?>

<div class="overflow-x-auto" style="height: 85vh;">
    <a href="?act=adduser" class="btn btn-success ">Create</a>
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
                <th>Username</th>
                <th>Email</th>
                <th>Address</th>
                <th>Tel</th>
                <th>Image</th>
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
                        <?= $value['username'] ?>
                    </th>
                    <th> <?= $value['email'] ?> </th>
                    <th>
                        <?= $value['address'] ?? '<p class="text-error">No Data</p>' ?>
                    </th>
                    <th>
                        <?= $value['tel'] ?? '<p class="text-error">No Data</p>' ?>
                    </th>
                    <th>
                        <div class="avatar">
                            <div class="mask mask-squircle w-12 h-12">
                                <img src="<?= !empty($value['image']) ? "data:image/jpeg;base64," . $value['image'] : "https://i.pinimg.com/564x/92/26/5c/92265c40c8e428122e0b32adc1994594.jpg" ?>" />
                            </div>
                        </div>
                    </th>
                    <th>
                        <a href="?act=updateuser&id=<?= $value['id'] ?>" class="btn btn-success"><i class="ri-edit-2-line"></i></a>
                        <a href="?act=deleteuser&id=<?= $value['id'] ?>" class="btn btn-error" onclick="return confirm('Bạn có muốn xóa user: <?= $value['username'] . ' ? ' ?>')"><i class="ri-delete-bin-line"></i></a>
                    </th>
                </tr>

            <?php endforeach;  ?>
        </tbody>

    </table>
</div>