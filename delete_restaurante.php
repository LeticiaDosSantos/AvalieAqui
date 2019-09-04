<?php
require 'banco.php';

$id_rest = null;

if(!empty($_GET['id_rest']))
{
    $id_rest = $_REQUEST['id_rest'];

    //Delete do banco:
    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM `restaurante` WHERE `restaurante`.`id_rest` = ".$_GET['id_rest'];
    $q = $pdo->prepare($sql);
    $q->execute(array($id_rest));
    Banco::desconectar();
    header("Location: buscar_restaurante.php");
}

if(!empty($_POST))
{
    $id_rest = $_POST['id_rest'];

    //Delete do banco:
    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM `restaurante` WHERE `restaurante`.`id_rest` = ".$_GET['id_rest'];
    $q = $pdo->prepare($sql);
    $q->execute(array($id_rest));
    Banco::desconectar();
    header("Location: index.php");
}
?>

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <title>Deletar Restaurante</title>
    </head>

    <body>
        <div class="container">
            <div class="span10 offset1">
                <div class="row">
                    <h3 class="well">Excluir Contato</h3>
                </div>
                <form class="form-horizontal" action="delete_restaurante.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id_rest;?>" />
                    <div class="alert alert-danger"> Deseja excluir o restaurante?
                    </div>
                    <div class="form actions">
                        <button type="submit" class="btn btn-danger">Sim</button>
                        <a href="buscar_restaurante.php" type="btn" class="btn btn-default">Não</a>
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
