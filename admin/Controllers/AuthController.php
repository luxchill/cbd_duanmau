<?php
function handleLogout(){
    session_destroy();
    header('location: /cbd_duanmau/?act=login');
}
?>