<?php

	session_id('8f4d7f796e63c22d07da39c6efcee622');

	require_once("config.php");

	session_regenerate_id();

	echo session_id();

	var_dump($_SESSION);

?>