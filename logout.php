<?php
	session_start();
	require_once 'banco.php';
	session_destroy();

	header('Location: index.php');


?>
