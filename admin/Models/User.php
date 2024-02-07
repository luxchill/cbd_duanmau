<?php

function getAllUser($limit, $initial_page)
{
    try {
        $sql = "SELECT * FROM users ORDER BY id DESC LIMIT :limit OFFSET :offset";
        $stmt = $GLOBALS['connect']->prepare($sql);
        $stmt->bindParam(':limit', $limit);
        $stmt->bindParam(':offset', $initial_page);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function getTotalPageUser()
{
    try {
        $sql = "SELECT COUNT(*) FROM users";
        $stmt = $GLOBALS['connect']->prepare($sql);
        $stmt->execute();
        return $stmt->fetchColumn();
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function insertOneUser($username, $email, $password, $address, $tel, $image)
{
    try {
        $sql = "INSERT INTO users (username, email, password, address, tel, image) VALUES (:username, :email, :password, :address, :tel, :image)";
        $stmt = $GLOBALS['connect']->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':tel', $tel);
        $stmt->bindParam(':image', $image);
        $stmt->execute();
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function getOneUser($id)
{
    try {
        $sql = "SELECT * FROM users WHERE id = :id";
        $stmt = $GLOBALS['connect']->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function updateOneUser($id, $username, $email, $password, $address, $tel, $image, $role)
{
    try {
        $sql = "UPDATE users SET username = :username, email = :email, password = :password, address = :address, tel = :tel, image = :image, role = :role WHERE id = :id";
        $stmt = $GLOBALS['connect']->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':tel', $tel);
        $stmt->bindParam(':image', $image);
        $stmt->bindParam(':role', $role);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function deleteOneUser($id)
{
    try {
        $sql = "DELETE FROM users WHERE id = :id";
        $stmt = $GLOBALS['connect']->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}
