<?php
    include ("cabecalho.php");
    include("crudEstado.php");
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

<body id="fundo">

<div>

  <img id="image" src="img/fachada.png" style="width:100%; ">
  
</div>

<br>
<br> 

  


  <div id="linha" style="width: 70%; "> </div>

<br>
<br>

<div class="container">
 <nav class="nav justify-content-center"> 
  <a class="nav-link" href="#" style="color: black; font-size: 30px; font-family:all;">Encontre o seu restaurante aqui! </a>
</nav>


<br>
<br>
<br>
<br>

<p></p>

<form style="margin-left: 20%;">
      <div  > 
  <div class="form-row" >

    <div class="form-group col-md-4" >
      <label for="inputState" >Estado</label>
      <select  id="inputState" class="form-control">
        <option selected>Escolha seu Estado </option>
        <?php foreach($data as $estado):?>
        <option> <?= $estado['nome'];?></option>
      <?php endforeach;?>

        <!-- <option>Rio Grande do Sul</option>
        <option>Santa Catarina</option> -->
      </select>
    </div>
      <div class="form-group col-md-4">
      <label for="inputState">Cidade</label>
      <select id="inputState" class="form-control">
        <option selected>Escolha...</option>
        <option></option>
      </select>
    </div>
  <button type="submit" class="btn btn-outline-primary" style="height: 10%; margin-top: 3.4%;">Procurar</button>
  </div>
  </div>
</div>

</form>


<br>
<br>

<br>
</p>
<br>
<br>

</div>

</body>

<?php
  include ("rodape.php");
?>