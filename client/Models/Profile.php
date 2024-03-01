<?php

function insertImage($id, $image){
    try {
        $sql = "UPDATE users SET image = :image WHERE id = :id";
        $stmt = $GLOBALS['connect']->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->bindParam(':image',$image);
        $stmt->execute();
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function updatePassword($id, $password){
    try {
        $sql = "UPDATE users SET password = :password WHERE id = :id";
        $stmt = $GLOBALS['connect']->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->bindParam(':password',$password);
        $stmt->execute();
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function getPassword($id){
    try {
        $sql = "SELECT * FROM users WHERE id = :id";
        $stmt = $GLOBALS['connect']->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}



?>