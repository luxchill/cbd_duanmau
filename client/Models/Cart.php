<?php
function getAllCart()
{
    try {
        $sql = "SELECT 
        c.id as c_id,
        c.title as c_title,
        c.image as c_image,
        c.price as c_price,
        u.username as u_username
        FROM cart as c
        INNER JOIN users as u ON c.user_id = u.id
        ";
        $stmt = $GLOBALS['connect']->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function insertCart($name, $image, $price, $user_id)
{
    try {
        $sql = "INSERT INTO cart (name, image, price, user_id) VALUES (:name, :image, :price, :user_id)";
        $stmt = $GLOBALS['connect']->prepare($sql);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":image", $image);
        $stmt->bindParam(":price", $price);
        $stmt->bindParam(":user_id", $user_id);
        $stmt->execute();
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}
