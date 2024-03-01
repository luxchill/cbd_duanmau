<?php
require_once "./Models/User.php";
function renderUsers($page)
{
    // $data = getAllUser();
    $limit = 6;
    $initial_page = ($page - 1) * $limit;
    $data = getAllUser($limit, $initial_page);

    // $page;

    $total_rows = getTotalPageUser();
    $total_pages = ceil($total_rows / $limit);
    require_once "./Views/users/table.php";
}

function renderCreateUser()
{
    require_once "./Views/users/create.php";
}

function handleCreateUser($username, $email, $password, $address, $tel, $image)
{
    if (empty($username)) {
        $_SESSION['errors']['username'] = 'Vui lòng nhập username';
    } else {
        unset($_SESSION['errors']['username']);
    }

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

    if (empty($address)) {
        $_SESSION['errors']['address'] = 'Vui lòng nhập address';
    } else {
        unset($_SESSION['errors']['address']);
    }

    if (empty($tel)) {
        $_SESSION['errors']['phone'] = 'Vui lòng nhập phone';
    } else {
        unset($_SESSION['errors']['phone']);
    }

    if (empty($image)) {
        $_SESSION['errors']['image'] = 'Vui lòng đăng ảnh';
    } else {
        unset($_SESSION['errors']['image']);
    }

    if (!empty($_SESSION['errors'])) {
        header('location: ?act=adduser');
    } else {
        $img = file_get_contents($image);
        $imgB64 = base64_encode($img);
        insertOneUser($username, $email, $password, $address, $tel, $imgB64);
        header("location: ?act=users");
    }
}

function renderUpdateUser($id)
{
    $data =  getOneUser($id);
    require_once "./Views/users/update.php";
}

function handleUpdateUser($id, $username, $email, $password, $address, $tel, $image, $old_image, $role)
{

    if (empty($username)) {
        $_SESSION['errors']['username'] = 'Vui lòng nhập username';
    } else {
        unset($_SESSION['errors']['username']);
    }

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

    // if (empty($address)) {
    //     $_SESSION['errors']['address'] = 'Vui lòng nhập address';
    // } else {
    //     unset($_SESSION['errors']['address']);
    // }

    // if (empty($tel)) {
    //     $_SESSION['errors']['tel'] = 'Vui lòng nhập tel';
    // } else {
    //     unset($_SESSION['errors']['tel']);
    // }

    // if (empty($role)) {
    //     $_SESSION['errors']['role'] = 'Vui lòng nhập role';
    // } else {
    //     unset($_SESSION['errors']['role']);
    // }

    $imgSaveDb = '';

    if (empty($image)) {
        $imgSaveDb = $old_image;
    } else {
        $img = file_get_contents($image);
        $imgBase64 = base64_encode($img);
        $imgSaveDb = $imgBase64;
    }

    if (!empty($_SESSION['errors'])) {
        header("location: ?act=updateuser&id=" . $id);
    } else {
        updateOneUser($id, $username, $email, $password, $address, $tel, $imgSaveDb);
        header("location: ?act=users");
    }
}


function handleDeleteUser($id)
{
    deleteOneUser($id);
    header("location: ?act=users");
}
