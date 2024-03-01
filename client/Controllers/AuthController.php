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

    if (empty($username)) {
        $_SESSION['errors']['username'] = 'Vui lòng nhập username 😢';
    } elseif (strlen($username) < 5) {
        $_SESSION['errors']['username'] = 'Username phải hơn 5 kí tự 😢';
    } else {
        unset($_SESSION['errors']['username']);
    }

    if (empty($email)) { 
        $_SESSION['errors']['email'] = 'Vui lòng nhập email 😢';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['errors']['email'] = 'Vui lòng nhập đúng định dạng email 😢';
    } elseif (validateEmailExists($email)) {
        $_SESSION['errors']['email'] = 'Email đã tồn tại 😿';
    } else {
        unset($_SESSION['errors']['email']);
    }


    if (empty($password)) {
        $_SESSION['errors']['password'] = 'Vui lòng nhập password 😿';
    } elseif (strlen($password) < 5) {
        $_SESSION['errors']['password'] = 'Password quá ngắn 😢';
    } else {
        unset($_SESSION['errors']['password']);
    }

    if (empty($_SESSION['errors'])) {
        insertUser($username, $email, $password);
        header("location: ?act=login");
    } else {
        header("location: ?act=register");
    }
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
                'id' => $data['id'] ?? null,
                'username' => $data['username'] ?? null,
                'email' => $data['email'] ?? null,
                'address' => $data['address'] ?? null,
                'tel' => $data['tel'] ?? null,
                'image' => $data['image'] ?? null,
                'is_login' => true,
                'role' => $data['role'] ? $data['role'] : 0,
            ];

            $_SESSION['login_success'] = 'Đăng nhập thành công';

            // echo '<script type="text/javascript">toastr.success("Have Fun")</script>';

            if ($role == 1) {
                header("location: admin");
            } else {
                header("location: ?act=home");
            }
        }
    }
}



function renderFogot()
{
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        echo $email;
    }
    require_once "./client/Views/auth/forgot.php";
}

function handleLogout()
{
    unset($_SESSION['user']);
    header('location: ?act=login');
}
