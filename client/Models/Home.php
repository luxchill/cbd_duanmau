<?php

function getAllFeedBack(){
    try {
        $sql = "SELECT feedback.id, feedback.content, users.username FROM feedback INNER JOIN users ON feedback.id_user = users.id";
        $stmt = $GLOBALS['connect']->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}


?>