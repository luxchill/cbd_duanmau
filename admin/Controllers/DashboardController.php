<?php

require_once "./Models/User.php";
require_once "./Models/Products.php";
require_once "./Models/Comment.php";

function renderDashboard(){
    $totalUser = getTotalPageUser();
    $totalProduct = getTotalPageProducts();
    $totalComment = getTotalCommentsCount();
    require_once "./Views/dashboard.php";

}


?>