

<?php

echo "<pre>";
print_r($data);
echo "</pre>";


?>

<?php foreach ($data as $key => $value) :  ?>
    <div class="card__product bg-gray-400">
        <h2>Name: <span class="text-error"><?= $value['name'] ?></span></h2>
        <img src="<?= $value['image'] ?>" alt="">
        <a href="?act=detail&id=<?= $value['id'] ?>" class="btn">Chi Tiet</a>
    </div>

<?php endforeach; ?>


