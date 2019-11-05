<?php
	session_start();
	require 'banco.php';
	session_destroy();

	header('Location: index.php');


?>
