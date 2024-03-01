<?php
require_once "./client/Models/Profile.php";

function renderProfile()
{
    if (!empty($_POST)) {
            $image = $_FILES['image']['tmp_name'];
            $img = file_get_contents($image);
            $imgB64 = base64_encode($img);
            $_SESSION['user']['image'] = $imgB64;
            insertImage($_SESSION['user']['id'], $imgB64);
            header("location: ?act=profile");
    }


    require_once "./client/Views/profile.php";
}

function handleChangeImage($id, $image)
{
    $img = file_get_contents($image);
    $imgB64 = base64_encode($img);
    insertImage($id, $imgB64);
    header("location: ?act=profile");
}
