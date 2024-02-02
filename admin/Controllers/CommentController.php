<?php
require_once "./Models/Comment.php";
function renderComment($page)
{
    $limit = 7;
    $initial_page = ($page - 1) * $limit;
    $data = getAllCommnet($limit, $initial_page);
    // $page;

    $total_rows = getTotalCommentsCount();
    $total_pages = ceil($total_rows / $limit);
    require_once "./Views/comments/table.php";
}

function renderUpdateComment($id)
{
    $data = getUpdateComment($id);
    require_once "./Views/comments/update.php";
}

function handleUpdateComment($id, $content)
{
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $dateTime = date('H:i:s d-m-Y');

    if(empty($content)){
        $_SESSION['errors']['content'] = 'Vui long nhap content';
    }else{
        unset($_SESSION['errors']['content']);
    }

    if(!empty($_SESSION['errors'])){
        header("location: ?act=updatecm&id=" . $id);
    }else{
        updateOneComment($id, $content, $dateTime);
        header("location: ?act=comments");
    }

}


function handleDeleteComment($id)
{
    // echo "id delete: " . $id;
    deleteOneComment($id);
    header("location: ?act=comments");
}
