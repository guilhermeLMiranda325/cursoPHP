<?php

	$conn = new PDO("mysql:host=127.0.0.1;dbname=dbphp7", "root", "Adnarim@80");

	$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

	$login = "joao";
	$password = "qwerty";
	$id = 2;

	$stmt->bindParam(":LOGIN", $login);
	$stmt->bindParam(":PASSWORD", $password);
	$stmt->bindParam(":ID", $id);

	$stmt->execute();

	echo "Alterado OK!";
	
?>