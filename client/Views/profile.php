<h1>Page profile</h1>

<?php
echo "<pre>";
print_r($_SESSION['user']);
echo "</pre>";
?>


<h1>Form Update Image</h1>

<div class="update_profile">
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="submit" value="submit" class="btn btn-error" name="submit">
    </form>
</div>


<div class="avatar">
    <div class="w-32 rounded">
        <img src="<?= 'data:image/jpeg;base64,' .  $_SESSION['user']['image'] ?? 'no image'  ?>" alt="No image" />
    </div>
</div>

<h1>Form update password</h1>

<div class="update_password">
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">Password Cũ:</label>
        <input type="password" name="password" class="border">
        <label class="text-error"><?= isset($_SESSION['errors']['password']) ? $_SESSION['errors']['password'] : "" ?></label>
        <label for="">Password Mới:</label>
        <input type="password" name="passwordNew" class="border">
        <label class="text-error"><?= isset($_SESSION['errors']['passwordNew']) ? $_SESSION['errors']['password'] : "" ?></label>

        <label for="">Xác nhận password mới:</label>
        <input type="password" name="passwordNewCheck" class="border">
        <label class="text-error"><?= isset($_SESSION['errors']['passwordNewCheck']) ? $_SESSION['errors']['password'] : "" ?></label>

        <input type="submit" value="submit" class="btn btn-error" name="submit__password">
    </form>
</div>