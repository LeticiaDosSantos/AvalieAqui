<?php
include "cabecalho.php";
require_once 'banco.php';

$id = null;
if(!empty($_GET['id_user']))
{
  $id = $_REQUEST['id_user'];
}

if(null==$id)
{
  header("Location: index.php");
}
else
{
 $pdo = Banco::conectar();
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $sql = "SELECT * FROM denuncia where id_user =".$_GET['id_user'];
 $q = $pdo->prepare($sql);
 $q->execute(array($id));
 $data = $q->fetch(PDO::FETCH_ASSOC);
 Banco::desconectar();
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>

  <div class="card text-white">
    <img src="img/denuncia.jpg" style="height: 10%;" class="card-img" alt="...">
    <div class="card-img-overlay">
      <center>
        <h1 style="margin-top: 24%" class="card-title">...</h1>
        <p class="card-text">Informações acerca da denúncia</p>
      </center>
    </div>
  </div>


  <br>
  <div style="width: 60%; margin-left: 20%">
    <center>
     <h5>Se a página estiver vazia significa que você não tem denuncias pendentes. Foram resolvidas por nossa equipe.</h5>
   </center>
 </div>
 


</div>
<br>

</div>




<div class="card-deck" style="width: 97%; margin-left: 2%">

  <?php
  foreach($pdo->query($sql)as $data){
    ?>

    <div class="card">

     <?php 
     $img_dir = "imagens/denuncias/". $id . "/";
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

        echo '<img  class="fotogrande" src="'.$image.'" style="width: 15%; float:left;"/></img>
        </div>
        </div>'
        ;

      }

    } else {
      echo '<center><img src="img/den.png"; style="width: 100%;"></center>';
    }
    ?>


    <div class="card-body">
     <?php echo '<a href="madero.php" style="text-decoration: none; color: black;"><h5 class="card-title">'.$data['titulo'].'</h5></a>';
     echo '<p class="card-text">'.$data['descricao'].'</p>
     <p class="card-text"><small class="text-muted"></small></p>
     </div>
     ';

     ?>

     <div class="btn-group"  style="width: 2%; margin-bottom: 10%; margin-left: 26%">
      <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Avançado
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="read_restaurante.php?id_rest='.$data['id_rest'].'">Visitar Restaurante</a>
        <a class="dropdown-item" href="delete_denuncia.php?id='.$data['id'].'">Excluir Denúncia</a>
      </div>
    </div>
  </div>

  <?php

}

?>


</div> 
</div> 


</center>

<!-- Modal -->

<?php
$img_dir = "imagens/denuncias/". $id . "/";
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

    <a class="modal-title" id="exampleModalLabel" style="color: black; font-size: 25px;  font-family:all;">'.$data['titulo'].'</a>

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
    </div>
    </div>
    ';
    $contador++;
  }

} 
?>
<a style="margin-left: -15%; margin-top: 2%" href="index.php" type="btn" class="btn btn-light">Cancelar</a>

<footer style="margin-top: 7%">
  <?php
  include "rodape.php";
  ?>
</footer>

</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="assets/js/bootstrap.min.js"></script>
</body>

</html>