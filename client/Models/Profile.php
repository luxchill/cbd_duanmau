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



?>