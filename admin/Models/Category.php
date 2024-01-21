<?php

function getAllCategory(){
    try {
        $sql = "SELECT * FROM category ORDER BY category.id DESC ";
        $stmt = $GLOBALS['connect']->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function insertCategory($name){
    try {
        $sql = "INSERT INTO category (name) VALUES (:name)";
        $stmt = $GLOBALS['connect']->prepare($sql);
        $stmt->bindParam(':name',$name);
        $stmt->execute();
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function selectUpdateCategory($id){
    try {
        $sql = "SELECT * FROM category WHERE id = :id";
        $stmt = $GLOBALS['connect']->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function updateCategory($id, $name){
    try {
        $sql = "UPDATE category SET name = :name WHERE id = :id";
        $stmt = $GLOBALS['connect']->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->bindParam(':name',$name);
        $stmt->execute();
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function deleteCategory($id){
    try {
        $sql = 'DELETE FROM category WHERE id = :id';
        $stmt = $GLOBALS['connect']->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

?>