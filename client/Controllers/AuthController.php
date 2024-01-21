<?php
require_once "./client/Models/Auth.php";


function renderLogin()
{
    require_once "./client/Views/auth/login.php";
}

function renderRegister()
{
    require_once "./client/Views/auth/register.php";
}

function handleRegister($username, $email, $password){
    insertUser($username, $email, $password);
    header("location: ?act=login");
}

function handleLogin($email, $password){
    header("location: ?act=home");
}

?>
