<?php
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Avalie Aqui</a>
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
        <a class="nav-link" href="#">Comidas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="create_restaurante.php">Cadastre Seu Restaurante</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Login
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="perfil_usuario.php?id=1">Meu Perfil</a>
          <a class="dropdown-item" href="login.php">Login</a>
          <a class="dropdown-item" href="#">Sair</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
</body>
</html>