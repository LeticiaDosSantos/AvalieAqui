<?php

include "cabecalho.php";

    require 'banco.php';
    $id_rest = null;
    if(!empty($_GET['id_rest']))
    {
        $id_rest = $_REQUEST['id_rest'];
    }

    if(null==$id_rest)
    {
        header("Location: index.php");
    }
    else
    {
       $pdo = Banco::conectar();
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql = "SELECT * FROM restaurante where id_rest = ?";
       $q = $pdo->prepare($sql);
       $q->execute(array($id_rest));
       $data = $q->fetch(PDO::FETCH_ASSOC);
       Banco::desconectar();
    }
?>

    <!DOCTYPE html>
    <html lang="pt-br">
<br>
    <head>
        <meta charset="utf-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <title>Avalie Aqui - Dados da Conta</title>
    </head>

    <body>
                            <nav class="nav justify-content-center"> 
  <a class="nav-link" href="#" style="color: black; font-size: 30px; font-family:all;"><?php echo $data['nome'];?></a>
</nav><br>
                  <div id="linha" style="width: 70%; border-bottom: 1.2px solid #000000; position: center; margin-left: 15%;
}"> </div>   <br><br> 

        <div class="container">
            <div class="span10 offset1">
                  <div class="card"><br>
    				<div id="linha" style="width: 70%; "> </div>
                <div class="container">
                <div class="form-horizontal">
                    <div class="control-group">
                        <?php echo $data['descricao'];?>
                        <div class="controls">
                            </label>
                        </div>
                    </div>
<br>
                    <div class="control-group">
                        <label style="font-size: 14pt" class="control-label">Endereço: </label>
                                <?php echo $data['endereco'];?>
                    </div>

                    <div class="control-group">
                        <label style="font-size: 14pt" class="control-label">Telefone: </label>
                                <?php echo $data['telefone'];?>
                    </div>

                    <!--<div class="control-group">
                        <label class="control-label">Email</label>
                        <div class="controls">
                            <label class="carousel-inner">
                                <?php //echo $data['email'];?>
                            </label>
                        </div>
                    </div>-->

                    <div class="control-group">
                        <label style="font-size: 14pt" class="control-label">Estado: </label>
                            <label><?php echo $data['estado'];?></label>
                    </div>
                    
                    <br/>
                    </div>
                    <?php //echo $data['estado'];?>

  <!--  <img src="img/italianaaa.png" class="card-img-top" alt="..." style="width: 100%;">
   
  </div>
-->
                    <div class="form-actions">
                    </div>
                  </div>
                  </div>
                </div>
                <br>
                        <a href="index.php" type="btn" class="btn btn-light">Voltar</a>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="assets/js/bootstrap.min.js"></script>
    </body>

    </html>

<?php
    include 'rodape.php';
?>
