<?php
include "cabecalho.php";
require 'banco.php';

$id = null;
if(!empty($_GET['id']))
{
  $id = $_REQUEST['id'];
}

if(null==$id)
{
  header("Location: index.php");
}
else
{
 $pdo = Banco::conectar();
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $sql = "SELECT * FROM denuncia where id =".$_GET['id'];
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

  <div class="card bg-dark text-white">
    <img src="img/denuncia.jpg" style="height: 10%" class="card-img" alt="...">
    <div class="card-img-overlay">
      <center>
        <h1 style="margin-top: 24%" class="card-title">...</h1>
        <p class="card-text">Informações acerca da denúncia</p>
      </center>
    </div>
  </div>




 
  <br>
 
  
  <nav class="nav justify-content-center"> 
    
  </nav><br>
  
  <div class="card-body">

    <?php
    foreach($pdo->query($sql)as $row)

    {
      echo '<div class="btn-group"  style="float: right; margin-right: 10%; margin-top: 5%">
      <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Avançado
      </button>
      <div class="dropdown-menu">
      <a class="dropdown-item" href="read_usuario.php?id_user='.$row['id_user'].'">Visitar Restaurante</a>
      <a class="dropdown-item" href="delete_denuncia.php?id='.$row['id'].'">Excluir Denúncia</a>
      </div>
      </div>
      </div>';

    }

    ?>

<center>
  <p class="card-text" style="margin-left: 17%;"><h1><strong style="margin-top: 10%"><?php echo $data['titulo'];?></strong></h1></p>
</center>
  </div>
</div>


<div class="form-actions">
</div>
</div>
</div>
</div>
<br>
</div>
</div>
<p></p>

<br>

<div class="card-deck" style="margin-left: 25%; width: 50%">

  <div class="card" style="margin-right: 1%;">
   <div>
    <?php echo $data['descricao'];?>
  </div>
  
</div>



</div>
<br>



<br>
<br>

<center>
</div></div><br>
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
    </div>
    </div>'
    ;
    
  }
  
} else {
  echo '<center>Este restaurante não possui imagens cadastradas</center><br></br>';
}
?>

</div> 
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

} else {
  echo '<center>Este restaurante não possui imagens cadastradas</center><br></br>';
}
?>
<a style="margin-left: -15%; margin-top: 10%" href="index.php" type="btn" class="btn btn-light">Cancelar</a>

<footer style="margin-top: 7%">
  <?php
  include "rodape.php";
  ?>
</footer>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="assets/js/bootstrap.min.js"></script>
</body>

</html>