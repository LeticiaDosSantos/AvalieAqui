<?php
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="/assets/SemanticUI/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/SemanticUI/components/icon.min.css">

    <script src="/assets/jQuery/jquery-3.3.1.min.js"></script>
    <script src="/assets/SemanticUI/semantic.min.js"></script>
</head>

<body>

    <nav class=" navbar sticky-top navbar navbar-expand-lg navbar-light bg-light">
      <!--!-->

  <a class="navbar-brand" href="#" ></a>
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNavDropdown">

    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="buscar_restaurantes.php">Restaurantes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="encontre.php">Encontre o seu restaurante</a>
      </li>
</ul>
    </div>
     
      <div>
        <img src="img/logo1.png" style="width: 39%;" style="margin-left: 1%;">
      </div>
    
    <div class="collapse navbar-collapse" id="navbarNavDropdown" style="float: right;" >

    <ul class="navbar-nav" style="margin-left: 40%;">

      <li class="nav-item">
        <a class="nav-link" href="create_restaurante.php">Cadastre Seu Restaurante</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Login
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="perfil_usuario.php?id=1">Meu Perfil</a>
          <a class="dropdown-item" href="logout.php">Sair</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
</body>
</html>