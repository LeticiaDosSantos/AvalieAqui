<?php
require 'banco.php';

if(!empty($_GET['id_user']))
{
   $id_rest = $_REQUEST['id_user'];
    //Delete do banco:
    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM `usuario` WHERE `usuario`.`id_user` = ".$_GET['id_user'];
    $q = $pdo->prepare($sql);
    $q->execute(array($id_user));
    Banco::desconectar();
    header("Location: buscar_usuarios.php");
}

if(!empty($_POST))
{
    $id_user = $_POST['id_user'];

    //Delete do banco:

    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM usuario where id_user = $id_user";//////////////////////////////////////////////////////descobrir como deletar a id certa
    $q = $pdo->prepare($sql);
    $q->execute(array($id_user));
    Banco::desconectar();
    exit;
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
                <div class="row">
                    <h3 class="well">Excluir Conta</h3>
                </div>
                <form class="form-horizontal" action="delete_usuario.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id_user;?>" />
                    <div class="alert alert-danger"> Tem certeza que deseja excluir sua conta?<br><br> Após excluir a ação não poderá ser desfeita.
                    </div>
                    <div class="form actions">
                        <button type="submit" class="btn btn-danger">Sim</button>
                        <a href="index.php" type="btn" class="btn btn-default">Não</a>
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
