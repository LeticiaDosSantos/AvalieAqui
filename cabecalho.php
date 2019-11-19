<?php
  session_start();


  if(empty($_SESSION['nome']))
    include ("cabecalho_login.php");
  else
    include ("cabecalho_logado.php");
?>
