<?php

	$conn = new PDO("sqlsrv:Database=dbphp7;server=127.0.0.1\SQLEXPRESS;ConnectionPooling=0", "sa", "Adnarim@80");

	$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

	$stmt->execute();

	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($results);

?>