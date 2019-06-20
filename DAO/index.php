<?php

	require_once("config.php");

	/*
	Faz somente select simples chamando o que tem na classe Sql
	$sql = new Sql();

	$usuarios = $sql->select("SELECT * FROM tb_usuarios");

	echo json_encode($usuarios);
	*/

	$root = new Usuario();

	$root->loadById(1);

	echo $root;

?>