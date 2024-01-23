<?php
require_once "./client/Models/Profile.php";

function renderProfile()
{
    require_once "./client/Views/profile.php";
}

function handleChangeImage($id, $image)
{
    $img = file_get_contents($image);
    $imgB64 = base64_encode($img);
    insertImage($id, $imgB64);
    header("location: ?act=profile");
}



?>
