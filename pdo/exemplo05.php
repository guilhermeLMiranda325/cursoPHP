<?php

	$conn = new PDO("mysql:host=127.0.0.1;dbname=dbphp7", "root", "Adnarim@80");

	$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

	$id = 1;

	$stmt->bindParam(":ID", $id);

	$stmt->execute();

	echo "Delete OK!";

?>