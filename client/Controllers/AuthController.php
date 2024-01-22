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

function handleRegister($username, $email, $password)
{
    insertUser($username, $email, $password);
    header("location: ?act=login");
}

function handleLogin($email, $password)
{

    if (empty($email)) {
        $_SESSION['errors']['email'] = 'Vui lòng nhập email';
    } else {
        unset($_SESSION['errors']['email']);
    }

    if (empty($password)) {
        $_SESSION['errors']['password'] = 'Vui lòng nhập password';
    } else {
        unset($_SESSION['errors']['password']);
    }

    if (!empty($_SESSION['errors'])) {
        header('location: ?act=login');
    } else {
        $data = checkAuthen($email, $password);
        $emailAuth = $data['email'];
        $passAuth = $data['password'];
        $role = $data['role'];

        echo $role;

        // echo $emailAuth . "<br/>";
        // echo $passAuth . "<br/>";

        if ($email == $emailAuth && $password == $passAuth) {
            $_SESSION['user'] = [
                'username' => $data['username'] ?? null,
                'email' => $data['email'] ?? null,
                'address' => $data['address'] ?? null,
                'tel' => $data['tel'] ?? null,
                'image' => $data['image'] ?? null,
                'is_login' => true,
            ];

            if ($role == 1) {
                header("location: admin");
            } else {
                header("location: ?act=home");
            }
        }
    }
}

function handleLogout()
{
    session_destroy();
    header('location: ?act=login');
}

?>
