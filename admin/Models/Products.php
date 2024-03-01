<?php

function getAll($limit, $initial_page)
{
    try {
        $sql = "SELECT
        p.id as p_id,
        p.name as p_name,
        p.price as p_price,
        p.image as p_image,
        p.description as p_description,
        p.views as p_views,
        c.name as c_name
        FROM products as p
        INNER JOIN category as c
        ON p.id_category = c.id ORDER BY p.id DESC
        LIMIT :limit OFFSET :offset";
        $stmt = $GLOBALS['connect']->prepare($sql);
        $stmt->bindParam(':limit', $limit);
        $stmt->bindParam(':offset', $initial_page);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}


function selectUpdate($id)
{
    try {
        $sql = "SELECT 
        p.id as p_id,
        p.name as p_name,
        p.price as p_price,
        p.image as p_image,
        p.description as p_description,
        p.views as p_views,
        c.name as c_name,
        c.id as c_id
        FROM products as p
        INNER JOIN category as c ON p.id_category = c.id WHERE p.id = :id
        ";
        $stmt = $GLOBALS['connect']->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}


function delete($id)
{
    try {
        $sql = "DELETE FROM products WHERE id = :id";
        $stmt = $GLOBALS['connect']->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}


function insertProduct($name, $price, $image, $desc, $category)
{
    try {
        $sql = "INSERT INTO products (name, price, image, description, id_category) VALUES (:name, :price, :image, :desc, :id_category)";
        $stmt = $GLOBALS['connect']->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':image', $image);
        $stmt->bindParam(':desc', $desc);
        $stmt->bindParam(':id_category', $category);
        $stmt->execute();
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function getTotalPageProducts()
{
    try {
        $sql = "SELECT COUNT(*) FROM products";
        $stmt = $GLOBALS['connect']->prepare($sql);
        $stmt->execute();
        return $stmt->fetchColumn();
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function updatePro($id, $name, $price, $image, $desc, $categoryName){
    try {
        $sql = "UPDATE products SET name = :name, price = :price, image = :image, description = :desc, id_category = :id_category WHERE id = :id";
        $stmt = $GLOBALS['connect']->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':image', $image);
        $stmt->bindParam(':desc', $desc);
        $stmt->bindParam(':id_category', $categoryName);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}
