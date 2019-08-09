<?php
require('banco.php');
  
  $pdo = Banco::conectar();
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $estado = "SELECT * FROM estado";
       $consulta = $pdo->query($estado);
       $data = $consulta->fetch(PDO::FETCH_ASSOC);
       // $q = $pdo->prepare($sql);
       // $q->execute(array());
       
       Banco::desconectar();
?>