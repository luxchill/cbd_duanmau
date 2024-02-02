<?php

function getAllCommnet($limit, $initial_page)
{
    try {
        $sql = "SELECT
        comments.id AS comment_id,
        comments.content AS comment_content,
        users.username AS user_name,
        users.image AS user_image,
        products.name AS product_name,
        comments.time_comment AS comment_time_comment
    FROM
        comments
    INNER JOIN
        users ON comments.id_user = users.id
    INNER JOIN
        products ON comments.id_product = products.id
    ORDER BY comments.id DESC    
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

function getUpdateComment($id)
{
    try {
        $sql = "SELECT
        comments.id AS comment_id,
        comments.content AS comment_content,
        users.username AS user_name,
        users.image AS user_image,
        products.name AS product_name,
        comments.time_comment AS comment_time_comment
    FROM
        comments
    INNER JOIN
        users ON comments.id_user = users.id
    INNER JOIN
        products ON comments.id_product = products.id
    WHERE comments.id = :id";

        $stmt = $GLOBALS['connect']->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function updateOneComment($id, $content, $time)
{
    try {
        $sql = "UPDATE comments SET content = :content, time_comment = :time_comment WHERE id = :id";
        $stmt = $GLOBALS['connect']->prepare($sql);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':time_comment', $time);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function getTotalCommentsCount()
{
    try {
        $sql = "SELECT COUNT(*) FROM comments";
        $stmt = $GLOBALS['connect']->prepare($sql);
        $stmt->execute();
        return $stmt->fetchColumn();
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function deleteOneComment($id)
{
    try {
        $sql = "DELETE FROM comments WHERE id = :id";
        $stmt = $GLOBALS['connect']->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}
