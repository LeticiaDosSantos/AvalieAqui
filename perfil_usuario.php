 <?php include 'cabecalho.php';
    require 'banco.php';
    $id = null;
    if(!empty($_GET['id']))
    {
        $id = $_REQUEST['id'];
    }

    if(null==$id)
    {
        header("Location: login.php");
    }
    else
    {
       $pdo = Banco::conectar();
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql = "SELECT * FROM usuario where id_user = ?";
       $q = $pdo->prepare($sql);
       $q->execute(array($id));
       $data = $q->fetch(PDO::FETCH_ASSOC);
       Banco::desconectar();
       $row=1;

?>

 <!DOCTYPE html>
    <html lang="pt-br">
<br>
    <head>
        <meta charset="utf-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <title>Avalie Aqui - Informações da Conta</title>
    </head>

    <body><br>
        <nav class="nav justify-content-center">
            <br><br><br>
        <a class="nav-link" style="color: black; font-size: 30px; font-family:all;">Informações da Conta</a>
           </nav><br>
        <div class="container" style="width: 60%">
            <div class="span10 offset1">
                  <div class="card">
                        <nav class="nav justify-content-center"> 
                          <a class="nav-link" style="color: black; font-size: 30px; font-family:all;"><?php echo $data['nome'];?></a>
                        </nav><br>

                <div class="container">
                <div class="form-horizontal">
                    
                    <div class="control-group">
                        <label class="control-label">Data de nascimento: </label>
                            <?php echo $data['dt_nascimento'];?>
                    </div>


                    <div class="control-group">
                        <label class="control-label">Email: </label>
                            <?php echo $data['email'];?>
                            </label>
                    </div>


                    <div class="control-group">
                        <label class="control-label">Sexo</label>
                                <?php echo $data['sexo'];?>
                            </label>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label">Senha: </label>
                            <?php echo $data['senha'];?>
                            </label>
                    </div>
                    <br/>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="assets/js/bootstrap.min.js"></script>
    <br>
    <div style="margin-left: 9.5%">
<?php
        echo '<a style="margin-left: 13%;" class="btn btn-warning" href="update_usuario.php?id_user='.$row['id_user'].'">Editar</a>';
        echo '<a style="margin-left: 0.5%;" class="btn btn-danger" href="delete_usuario.php?id_user='.$row['id_user'].'">Excluir</a>';
        echo "<br>";
        echo "<br>";
        echo '<a style="margin-left: 13%;" class="btn btn-light" href="index.php'.$row['id_user'].'">Voltar</a>';
    }
?></div>
    </body>
    </html>
<?php
    include ("rodape.php");