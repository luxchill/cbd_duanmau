<?php

try {
	$connect = new PDO("pgsql:host=$host;dbname=$dbname", $user, $pass);
	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e) {
	die($e->getMessage());
}

?>
