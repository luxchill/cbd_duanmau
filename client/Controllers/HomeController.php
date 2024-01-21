<?php
require_once "./client/Models/Home.php";
function renderHome(){
    $feedback = getAllFeedBack();
    require_once "./client/Views/home.php";
}



?>