<?php
include ("cabecalho.php");


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
  include 'banco.php';
  $pdo = Banco::conectar();
  $sql = 'SELECT * FROM `avalie-aqui`.`tipo_comida` ';

  foreach($pdo->query($sql)as $row)
  {
    echo '<tr>';                           
    echo '<td width=250>';
    echo '<a class="btn btn-light" style="margin-bottom: 3%; margin-left: 0%;" href="categorias.php?id_tipo_comida='.$row['id_comida'].'">'. $row['categoria'] . '</a>';
    echo ' ';
    echo '</td>';
    echo '</tr><br>';
  }
  Banco::desconectar();
  ?>
  
</nav>
<br>
</nav>
<br>
</nav>

<br>


<div id="linha" style="width: 70%; "> </div>


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

      <?php
      $i=1;
      while ($i <= 4) {
        ?>

        <div class="card">
          <img class="card-img-top" src="img/japao.png" src=".../100px100/" alt="Imagem de capa do card">
          <div class="card-body">
            <a href="madero.php" style="text-decoration: none; color: black;"><h5 class="card-title">Restaurante Madero</h5></a>
            <p class="card-text">Este é um card mais longo com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional. Este conteúdo é um pouco maior.</p>
            <p class="card-text"><small class="text-muted">Atualizados 3 minutos atrás</small></p>
          </div>
        </div>
        
        <?php
        $i++;
      }

      ?>

    </div>

  </center>

  <br><br>
</div>


<div class="card-deck">

  <?php
  $i=1;
  while ($i <= 4) {
    ?>

    <div class="card">
      <img class="card-img-top" src="img/japao.png" src=".../100px100/" alt="Imagem de capa do card">
      <div class="card-body">
        <a href="madero.php" style="text-decoration: none; color: black;"><h5 class="card-title">Restaurante Madero</h5></a>
        <p class="card-text">Este é um card mais longo com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional. Este conteúdo é um pouco maior.</p>
        <p class="card-text"><small class="text-muted">Atualizados 3 minutos atrás</small></p>
      </div>
    </div>
    
    <?php
    $i++;
  }

  ?>
</div>
</div> <!-- isso aqui fecha o container, da pra tirar dai vai ficar pros lados-->
<br>

<?php
include ("rodape.php");
?>
</div>
</div>

</body>