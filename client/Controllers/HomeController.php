<?php
require_once "./client/Models/Home.php";
require_once "./client/Models/Product.php";
function renderHome(){
    $products = getAll();
    $feedback = getAllFeedBack();
    require_once "./client/Views/home.php";
}



?>