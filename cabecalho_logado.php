<?php
require_once "banco.php";
$id = null;
    if(!empty($_GET['id_user']))
    {
        $id = $_REQUEST['id_user'];
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Bootstrap/bootstrap.min.css">

    <script src="/assets/jQuery/jquery-3.3.1.min.js"></script>
    
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

<?php


 $pdo = Banco::conectar();
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $sql = "SELECT * FROM usuario where id_user = ?";
 $q = $pdo->prepare($sql);
 $q->execute(array($_SESSION['id_user']));
 $data = $q->fetch(PDO::FETCH_ASSOC);

$acesso = $data['tipo_user_id_tip'];
 Banco::desconectar();

if ($acesso == 1) {
 ?>

     <li class="nav-item">
        <a class="nav-link" href="buscar_restaurantes.php">Restaurantes</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="buscar_usuarios.php">Usuários</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="buscar_denuncias.php">Denúncias</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="encontre.php">Encontre o seu restaurante</a>
      </li>
</ul>
    </div>
     
      <div>
        <img src="img/logo1.png" style="width: 39%;" style="margin-left: 10%;">
      </div>
    
    <div class="collapse navbar-collapse" id="navbarNavDropdown" style="float: right;" >

    <ul class="navbar-nav" style="margin-left: 23.5%;">

      <li class="nav-item">
        <a class="nav-link" href="create_restaurante.php">Cadastre Seu Restaurante</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <!--<img src="img/user-icon.png" style="width: 10%;">--><?php echo $_SESSION['nome']; ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="read_usuario.php?id_user=<?php echo $_SESSION['id_user'];?> ">Meu Perfil</a>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<?php
}elseif ($acesso == 0) {
?>


      <li class="nav-item">
        <a class="nav-link" href="encontre.php">Encontre o seu restaurante</a>
      </li>
</ul>
    </div>
     
      <div>
        <img src="img/logo1.png" style="width: 39%;" style="margin-left: 10%;">
      </div>
    
    <div class="collapse navbar-collapse" id="navbarNavDropdown" style="float: right;" >

    <ul class="navbar-nav" style="margin-left: 23.5%;">

      <li class="nav-item">
        <a class="nav-link" href="create_restaurante.php">Cadastre Seu Restaurante</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <!--<img src="img/user-icon.png" style="width: 10%;">--><?php echo $_SESSION['nome']; ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="read_usuario.php?id_user=<?php echo $_SESSION['id_user'];?> ">Meu Perfil</a>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
 <?php
}
?>
</body>
</html>