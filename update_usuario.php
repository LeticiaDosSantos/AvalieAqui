<?php

include "cabecalho.php";

require_once 'banco.php';

$id_user = null;
if ( !empty($_GET['id_user']))
{
    $id_user = $_REQUEST['id_user'];
}

if ( null==$id_user ){
    header("Location: index.php");
}

if ( !empty($_POST)){

    $nomeErro = null;
    $sexoErro = null;
    $dt_nascimentoErro = null;
    $emailErro = null;

    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $dt_nascimento = $_POST['dt_nascimento'];
    $email = $_POST['email'];

    $imagens = $_FILES['imagens'];
    
        //Validação
    $validacao = true;
    if (empty($nome))
    {
        $nomeErro = 'Por favor digite o nome!';
        $validacao = false;
    }

    if (empty($sexo))
    {
        $sexoErro = 'Por favor selecione seu sexo!';
        $validacao = false;
    }

    if (empty($dt_nascimento))
    {
        $dt_nascimentoErro = 'Por favor digite o horrário de funcionamento!';
        $validacao = false;
    }

    if ( !filter_var($email,FILTER_VALIDATE_EMAIL) )
    {
        $emailErro = 'Por favor digite seu email!';
        $validacao = false;
    }


        // update data

    if ($validacao)
    {
        $pdo = Banco::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE usuario set nome = ?, sexo = ?, dt_nascimento = ?, email = ? WHERE id_user = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($nome,$sexo,$dt_nascimento,$email,$id_user));

// -------------------- atualizar foto -------------------- \\

   


 $last_id = $pdo->lastInsertId();

            $target_dir = "imagens/";
            $count_img = 0;
            $uploaddir = $target_dir . "usuarios/". $last_id . "/";
            if (!is_dir($uploaddir)) {
                mkdir($uploaddir);
            }

            foreach ($imagens['name'] as $imagem) {
                $target_file = $uploaddir . $count_img."-".basename($imagem);

                move_uploaded_file($imagens["tmp_name"][$count_img], $target_file);
                $count_img = $count_img + 0;
            }





    }
}
else
{
    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM usuario where id_user = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id_user));
    $data = $q->fetch(PDO::FETCH_ASSOC);
    $nome = $data['nome'];
    $sexo = $data['sexo'];
    $dt_nascimento = $data['dt_nascimento'];
    $email = $data['email'];
    Banco::desconectar();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Atualizar Contato</title>
</head>
<br>
<body>
    <div class="container" style="margin-left: 14%">
        <div style="width: 85%">
            <center>
              <a class="nav-link" style="color: black; font-size: 30px; font-family:all;">Atualizar Informações</a>
          </nav><br>
          <div id="linha" style="width: 70%; border-bottom: 1.2px solid #000000; position: center; margin-left: 5%;
      }"> </div>   <br><br> </center>
      <div class="span10 offset1">
        <div class="card">

            <div class="card-body">
               <?php 
               $id_user= $_GET['id_user'];
               $img_dir = "imagens/usuarios/". $id_user . "/";
               if (is_dir($img_dir)) {
                  $images = glob($img_dir . "*");
                  $index = 3;
                  $contador = 0;
                  echo '<div style="width: 10%; display: inline">';
                  foreach ($images as $image) {
                      echo '

                      <div data-toggle="modal" data-target="#exampleModal'.$contador.'" style="margin-left: 13%; margin-right: 13%">';
                      $contador++;

                      $index++;

                      echo '<img  class="fotogrande" style=" width: 150px;
                      height: 150px;
                      background: gray;
                      border: 3px solid gray;
                      border-radius: 50%;
                      float: left;
                      margin-top: 4%;
                      margin-left: 0%" src="'.$image.'" style="width: 15%; float:right;"/></img>
                      </div>
                      </div>
                      </div>'
                      ;

                  }

              } else {
                echo "<img src='img/sem-img.png' style=' width: 150px;
                height: 150px;
                background: yellow;
                border: 3px solid gray;
                border-radius: 50%;
                float: left;
                margin-top: 4%;
                margin-left: 5%'></img>";
            }
            ?>


            <!-- Modal -->

            <?php
            $img_dir = "imagens/usuarios/". $id_user . "/";
            if (is_dir($img_dir)) {
              $images = glob($img_dir . "*");
              $index = 3;
              $contador = 0;
              foreach ($images as $image) {

                $index++;
                echo '
                <div class="modal fade" id="exampleModal'.$contador.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document" style="margin-top: 7%;" >
                <div class="modal-content" style="">
                <div class="modal-header">

                <a class="modal-title" id="exampleModalLabel" style="color: black; font-size: 25px;  font-family:all;">'.$data['nome'].'</a>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div>

                <div class="modal-body">
                <img class="fotogrande" src="'.$image.'" style="width:100%;";/></img> 
                </div> ';

                echo '
                </div>

                </div>
                </div>
                </div>    ';
                $contador++;
            }

        } else {
            echo "<img src='img/sem-img.png' style=' width: 150px;
            height: 150px;
            background: yellow;
            border: 3px solid gray;
            border-radius: 50%;
            float: left;
            margin-top: 8%;
            margin-left: 5%'></img>";
        }
        ?>

        <!-- ----------- -->



                    <a style="margin-left: 18%">Alterar foto</a><br><br><br>
        <div style="width: 50%; margin-left: 47%; margin-top: -35%">
            <form class="form-horizontal" action="./update_usuario.php?id_user=<?php echo $id_user?>" enctype="multipart/form-data" method="post">
                <div style="margin-left: 11%">

                  <div class="input-group mb-3">
                     
                    <div class="input-group">
                      <div class="custom-file">

                        <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04"  id="imagens" name="imagens[]" multiple="multiple">
                        <label class="custom-file-label" for="inputGroupFile04">Escolher Arquivo...</label>
                    </div>
                    <div class="input-group-append">
                    </div>
                </div>
                 
                </div>

                <div class="control-group <?php echo !empty($nomeErro)?'error':'';?>">
                    <label class="control-label">Nome</label>
                    <div class="controls">
                        <input name="nome" class="form-control" size="50" type="text" placeholder="Nome" value="<?php echo !empty($nome)?$nome:'';?>">
                        <?php if (!empty($nomeErro)): ?>
                            <span class="help-inline"><?php echo $nomeErro;?></span>
                        <?php endif; ?>
                    </div>
                </div>


                <div class="control-group <?php echo !empty($sexoErro)?'error':'';?>">
                    <label class="control-label">Sexo</label>
                    <div class="controls">
                        <input name="sexo" class="form-control" size="50" type="text" value="<?php echo !empty($sexo)?$sexo:'';?>">
                        <?php if (!empty($sexoErro)): ?>
                            <span class="help-inline"><?php echo $sexoErro;?></span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="control-group <?php echo !empty($dt_nascimentoErro)?'error':'';?>">
                    <label class="control-label">Data de Nascimento</label>
                    <div class="controls">
                        <input name="dt_nascimento" class="form-control" size="30" type="text" placeholder="Telefone" value="<?php echo !empty($dt_nascimento)?$dt_nascimento:'';?>">
                        <?php if (!empty($dt_nascimentoErro)): ?>
                            <span class="help-inline"><?php echo $dt_nascimentoErro;?></span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="control-group <?php echo !empty($emailErro)?'error':'';?>">
                    <label class="control-label">Endereço de Email</label>
                    <div class="controls">
                        <input name="email" class="form-control" size="30" type="text" placeholder="Digite aqui" value="<?php echo !empty($email)?$email:'';?>">
                        <?php if (!empty($emailErro)): ?>
                            <span class="help-inline"><?php echo $emailErro;?></span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </body>
        <script type="text/javascript">
  //CIDADES E ESTADOS
  new dgCidadesEstados({
    cidade: document.getElementById('cidade'),
    estado: document.getElementById('estado'),
    change: true
});
</script>



<br/>
</div>
</div>
</div>
</div>
<div class="form-actions" style="margin-top: 2%">
    <a href="index.php" type="btn" class="btn btn-light">Voltar</a>
    <button type="submit" class="btn btn-warning">Atualizar</button>
</div>
</form>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="cidades-estados-1.2-utf8.js"></script>
<script>


    new dgCidadesEstados({
        cidade: document.getElementById('cidade'),
        estado: document.getElementById('estado'),
        change: true
    });
</script>
</body>

</html>

<?php
include "rodape.php";
?>