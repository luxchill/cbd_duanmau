<?php

function getAll()
{
    try {
        $sql = "SELECT * FROM products";
        $stmt = $GLOBALS['connect']->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function getById($id)
{
    try {
        $sql = "SELECT * FROM products WHERE id = :id";
        $stmt = $GLOBALS['connect']->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

?>
