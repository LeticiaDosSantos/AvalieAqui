<?php
require ("cabecalho.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/css/Bootstrap/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/index.css">
  <link rel="stylesheet" type="text/css" href="assets/css/carrossel.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>

  <title>Avalie Aqui</title>
</head>

<body>

  <div>

    <img id="image" src="img/fundo3.png" style="width:100%; cursor: auto">
    
  </div>

  <br>

  <nav class="nav justify-content-center"> 
    <a class="nav-link" style="color: black; font-size: 30px; font-family:all;">Selecione a Categoria Desejada</a>
  </nav>
  <br>
  <div id="linha" style="width: 70%; border-bottom: 1.2px solid #000000; position: center; margin-left: 15%;
}"> </div>   
<br>
<nav class="nav justify-content-center" style="margin-left: 22%; margin-right: 22%;">
  <br>
  
  <?php
  require_once "banco.php"; 
  $pdo = Banco::conectar();
  $sql = 'SELECT * FROM `avalie-aqui`.`tipo_comida` ';
  foreach($pdo->query($sql)as $row)
  {
    echo '<tr>';                           
    echo '<td width=250>';
    echo '<a class="btn btn-light" style="margin-bottom: 3%; margin-left: 1%;" href="categorias.php?id_tipo_comida='.$row['id_comida'].'">'. $row['categoria'] . '</a>';
    echo ' ';
    echo '</td>';
    echo '</tr>';
  }
  Banco::desconectar();
  ?>
  
</nav>
<br>
</nav>
<br>
</nav>

<br>


<div id="linha" style="width: 70%; margin-top: -5%"> </div>


<br>

<div class="container"> <!-- usar este para as categorias -->
  
  <br>

  <div>

    <img id="image" src="img/sugestao3.png" style="width:100%; cursor: auto">
    
  </div>

  <br>
  <br>
  <div>

    <div class="card-deck">

     

    </div>

  </center>

<br>

</div>

      <div class="card-body">

<?php
$id_rest = null;
$pdo = Banco::conectar();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
/*(SUM(qnt_estrela)/COUNT(*))*/
$sqll = "SELECT nome, qnt_estrela, id_rest from restaurante, avaliacos where id_rest = id_rest_id order by qnt_estrela desc limit 3";
$r = $pdo->prepare($sqll);
$r->execute();
$dataa = $r->fetchAll(PDO::FETCH_ASSOC);

$i = 0;


$foto = 1;

          
foreach ($dataa as $key => $value) {
  // echo "Key: ".$key." valores: <br>";
   //echo "Nome: ".$value['nome']." - Estrelas: ".$value['qnt_estrela']."<br>";

//read_rest.php?id_rest="'.$value['id_rest'].
?>
  
     <div class="card-deck" style="width: 32%; float:left; margin-left: 1%">
      <div class="card" >
     <img style="width: 80%; margin-left: 10%; cursor: default;" class="card-img-top" <?php echo "src=img/".$foto.".png"  ?> src=".../100px100/" alt="Imagem de capa do card">
<?php
    // echo "Nome: ".$value['nome']." - Estrelas: ".$value['qnt_estrela']."<br>";
       echo '
        <a href="#" style="text-decoration: none; color: black;"><h5 class="card-title">'.$value['nome'].'</h5></a>
        <p class="card-text">Este retaurante está entre os mais bem avaliados do Brasil</p>
        <p class="card-text"><small class="text-muted">Restaurante '.$value['qnt_estrela'].' Estrelas</small></p>
          </div>
</div>';
 
   

  // echo "<br>";
$foto++;
}
   ?>



   <?php
      $foto=1;
      while ($foto <= 3) {
        ?>

          


   
 
     <?php
          $foto++;
      }
      ?>





   </div>
       </div>
        

  


<?php


Banco::desconectar();

  ?>

</div>



</div> <!-- isso aqui fecha o container, da pra tirar dai vai ficar pros lados-->
<br>

<div style="margin-top: 25%">
<?php
include ("rodape.php");
?>
</div>
</div>

</body>