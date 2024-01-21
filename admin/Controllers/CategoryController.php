<?php

require_once "./Models/Category.php";


function renderCategory(){
    $data = getAllCategory();
    require_once "./Views/category/table.php";
}

function renderCreateCategory(){
    require_once './Views/category/create.php';
}

function addCategory($name){
    insertCategory($name);
    header("location: ?act=category");
}

function renderUpdateCategory($id){
    $data = selectUpdateCategory($id);
    require_once './Views/category/update.php';
}

function handleDeleteCategory($id){
    deleteCategory($id);
    header('location: ?act=category');
}

function handleUpdateCategory($id, $name){
    updateCategory($id, $name);
    header('location: ?act=category');
}

?>