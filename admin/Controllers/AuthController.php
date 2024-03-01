<?php
function handleLogout(){
    unset($_SESSION['user']);
    header('location: /cbd_duanmau/?act=login');
}
?>