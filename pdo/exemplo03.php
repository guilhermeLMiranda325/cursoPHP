<?php

	$conn = new PDO("mysql:host=127.0.0.1;dbname=dbphp7", "root", "Adnarim@80");

	$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

	$login = "jose";
	$password = "1234567890";

	$stmt->bindParam(":LOGIN", $login);
	$stmt->bindParam(":PASSWORD", $password);

	$stmt->execute();

	echo "Inserido OK!";

?>