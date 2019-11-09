<?php
include 'cabecalho.php';
require 'banco.php';
$id_user = null;
if(!empty($_GET['id_user']))
{
    $id_user = $_GET['id_user'];
}
if(!empty($_POST))
{
    $id = $_POST['id_user'];
    //Delete do banco:
    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM `usuario` WHERE `usuario`.`id_user` = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    Banco::desconectar();
    header("Location: buscar_usuarios.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Deletar Conta</title>
</head>

<body>
    <div class="container">
        <div class="span10 offset1">
            <center>
                <div class="row">


                    <a class="nav-link" style="color: black; font-size: 30px; font-family:all; margin-left: 40%;">Excluir Conta</a>
                </nav>
                <br>
                <div id="linha" style="width: 70%; border-bottom: 1.2px solid #000000; position: center; margin-left: 15%; margin-bottom: 2%;
            }"> 
        </div>
    </center>

    
</div>
<form class="form-horizontal" action="delete_usuario.php" method="post">
    <input type="hidden" name="id_user" value="<?php echo $id_user;?>" />
    <div class="alert alert-danger">Após a deleção não será possível recuperar seus dados.<br><br>Tem certeza que deseja excluir sua conta?
    </div>
    <div class="form actions">
        <button type="submit" class="btn btn-light">Sim</button>
        <a href="buscar_usuarios.php" type="btn" class="btn btn-dark">Não</a>
    </div>
</form>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="assets/js/bootstrap.min.js"></script>
</body>

</html>