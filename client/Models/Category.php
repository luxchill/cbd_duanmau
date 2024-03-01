<?php

function getAllCategory()
{
    try {
        $sql = "SELECT * FROM category";
        $stmt = $GLOBALS['connect']->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function getProductsCategory($id, $excludeId)
{
    try {
        $sql = "SELECT * FROM products WHERE id_category = :id AND id != :excludeId LIMIT 4";
        $stmt = $GLOBALS['connect']->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->bindParam(':excludeId',$excludeId);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}
