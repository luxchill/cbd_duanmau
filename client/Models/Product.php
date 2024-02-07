<?php

function getAll()
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
        ";
        $stmt = $GLOBALS['connect']->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function getIdCategory($id)
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
        ON p.id_category = c.id WHERE p.id_category = :id ORDER BY p.id DESC 
        ";
        $stmt = $GLOBALS['connect']->prepare($sql);
        $stmt->bindParam(':id',$id);
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
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function renderComment($id)
{
    try {
        $sql = "SELECT
        comments.id AS comment_id,
        comments.content AS comment_content,
        users.username AS user_name,
        users.image AS user_image,
        products.name AS product_name
    FROM
        comments
    INNER JOIN
        users ON comments.id_user = users.id
    INNER JOIN
        products ON comments.id_product = products.id
    WHERE 
    comments.id_product = :id";
        $stmt = $GLOBALS['connect']->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function insertComment($id_user, $id_product, $comment, $timeComment)
{
    try {
        $sql = "INSERT INTO comments (content, id_user, id_product, time_comment) VALUES (:content, :id_user, :id_product, :time_comment)";
        $stmt = $GLOBALS['connect']->prepare($sql);
        $stmt->bindParam(":content", $comment);
        $stmt->bindParam(":id_user", $id_user);
        $stmt->bindParam(":id_product", $id_product);
        $stmt->bindParam(":time_comment", $timeComment);
        $stmt->execute();
    } catch (PDOException  $e) {
        die($e->getMessage());
    }
}
