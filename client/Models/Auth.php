<?php

function insertUser($username, $email, $password)
{
    try {
        $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
        $stmt = $GLOBALS['connect']->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

// function checkAuthen($email, $password){
//     try {
//         $sql = "SELECT * FROM users WHERE email = :email"
//     } catch (PDOException $e) {
//         die($e->getMessage());
//     }
// }