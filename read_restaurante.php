<?php
include "cabecalho.php";
require_ONCE 'banco.php';
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
 $a = 'SELECT t.categoria FROM restaurante r
inner join restaurante_categoria c on (c.id_restaurante=r.id_rest)
inner join tipo_comida t on (t.id_comida=c.id_tipo_comida)
where id_rest = ?';
 $q = $pdo->prepare($sql);
 $r = $pdo->prepare($a);
 $q->execute(array($id_rest));
 $r->execute(array($id_rest));
 $data = $q->fetch(PDO::FETCH_ASSOC);
 $dataa = $r->fetchAll();
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
  <title>Avalie Aqui - Dados do Restaurante</title>

  <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/css/Bootstrap/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/index.css">
   <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="estilo1.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


  <!-- Latest compiled and minified JavaScript -->
  <script src="assets/js/bootstrap.min.js"></script>
</head>

<body>
  <nav class="nav justify-content-center"> 
    <a class="nav-link" style="color: black; font-size: 30px; font-family:all;"><?php echo $data['nome'];?></a>
  </nav>
  <br>
  <div id="linha" style="width: 70%; border-bottom: 1.2px solid #000000; position: center; margin-left: 15%;
}"> </div>   
<br><br> 

<br>
<center>
  <div class="card bg-light mb-3" style="max-width: 59rem;">

    <div class="card-body">
      <h5 class="card-title">Descrição</h5>
      <p class="card-text"> <?php echo $data['descricao'];?></p>
      
    </div>
  </div></center>


  <div>

    <?php 
    $img_dir = "imagens/restaurantes/". $id_rest . "/";
    if (is_dir($img_dir)) {
      $image = glob($img_dir . "*")[0];
      $index = 3;
      
      $index++;
      echo '<center><div>
      <img src="'.$image.'" style="width: 70%";></img>
      </div></center>';
      
      
    } else {
      echo '<center><img src="img/sem-imagem.png"; style="width: 30%;"></center>';
    }
    ?>

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
<br>
<br>

<br>

<div class="card-deck" style="margin-left: 2.5%; width: 95%">

  <div class="card"><center>
    <img src="img/localizacao.jpg" class="card-img-top" alt="..." style="width: 50%"></center>
    <div class="card-body">
      <h5 class="card-title"></h5>
      <p class="card-text"><h5 class="card-title">Localização</h5>
        <p class="card-text">Estado: <?php echo $data['estado'];?></p>
        <p class="card-text">Cidade: <?php echo $data['cidade'];?></p>
        <p class="card-text">Endereço: <?php echo $data['endereco'];?>, <?php echo $data['numero'];?></p></p>
      </div>
    </div>

    <div class="card">
      <center>
       <img src="img/contato.png" class="card-img-top" alt="..." style="width: 50%">
     </center>
     <div class="card-body">
      <h5 class="card-title">Contato</h5>
      <p class="card-text">Telefone: <?php echo $data['telefone'];?></p>
    </div>
  </div>

  <div class="card" style="margin-right: 1%;">
    <center>
      <img src="img/hora.png" class="card-img-top" alt="..." style="width: 50%">
    </center>
    <div class="card-body">
      <h5 class="card-title">Horários</h5>
      <p class="card-text"><?php echo $data['horario_funcionamento'];?></p>
    </div>
  </div>

  <div class="card" style="margin-right: 1%;">
    <center>
      <img src="img/sobre.png" class="card-img-top" alt="..." style="width: 50%">
    </center>
    <div class="card-body">
      <h5 class="card-title">Cardápio</h5>


      <?php
foreach ($dataa as $key => $value) {
      echo '<p class="card-text">'.$value['categoria'].'</p>';
  
}

      ?>
      <p class="card-text">Faixa de preço: <strong style="color: green">R$ </strong><?php echo $data['preco'];?></p>
    </div>
  </div>

</div>
<br>



<br>
<br>
<div id="linha" style="width: 70%; border-bottom: 1.2px solid #000000; position: center; margin-left: 15%;}"> </div>   

<br>


<nav class="nav justify-content-center"> 
  <a class="nav-link" style="color: black; font-size: 30px; font-family:all;">Galeria de imagens </a>
</nav>

<br>

<p></p>

<div id="linha" style="width: 70%; border-bottom: 1.2px solid #000000; position: center; margin-left: 15%;"> </div>





<script>
  function clique(img){
    var modal=document.getElementById('janelaModal');
    var modalImg=document.getElementById("imgModal");
    var captionTexto=document.getElementById("txtImg");
    var btFechar=document.getElementsByClassName("fechar")[0];
    modal.style.display="block";
    modalImg.src=img.src;
    modalImg.alt=img.alt;
    captionTexto.innerHTML=img.alt;
    btFechar.onclick=function(){
      modal.style.display="none";
    }
  }
</script>

<br><br>
<br>

 <?php 
 $img_dir = "imagens/restaurantes/". $id_rest . "/";
 if (is_dir($img_dir)) {
  $images = glob($img_dir . "*");
  $index = 3;
  $contador = 0;
echo '<div style="width: 10%; display: inline">';
  foreach ($images as $image) {
  echo '
  <div data-toggle="modal" data-target="#exampleModal'.$contador.'" style="margin-left: 20%; margin-right: 13%"; >';
  $contador++;

    $index++;
    
    echo '<img  class="fotogrande" src="'.$image.'" style="margin-left:0.4%; width: 20%; float:left;"/></img>
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
</div>

<br>
<br>



<!-- Modal -->

<?php
$img_dir = "imagens/restaurantes/". $id_rest . "/";
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
    </div>
    </div>
    ';
    $contador++;
  }

} else {
  echo '<center>Este restaurante não possui imagens cadastradas</center><br></br>';
}
?>

<br>
  <div style="margin-top: 8%">


</div>
<br>
<br>
<br>

<?php
if(empty($_SESSION['nome'])){

    echo "";
}
  else{
    ?>

<div id="linha" style="width: 70%; border-bottom: 1.2px solid #000000; position: center; margin-left: 15%;"> </div>   

<br>


 <nav class="nav justify-content-center"> 
  <h5 class="nav-link" href="#" style="color: black; font-size: 30px; font-family:all;">Faça a sua avaliação aqui </h5>
</nav>

<br>

<p></p>

<div id="linha" style="width: 70%; border-bottom: 1.2px solid #000000; position: center; margin-left: 15%;"> </div>

<br>
<br>
<div class="card bg-light mb-3" style="max-width: 59rem; margin-left: 15.5%;">
  <div class="card-body" >
    <h5 class="card-title">De uma nota ao restaurante</h5><br>

     <?php echo '<a href="create_denuncia.php?id_rest='.$_GET['id_rest'].'" type="btn" class="btn btn-dark" style="float: right;">Denunciar restaurante</a>';?>



    <?php
    if(isset($_SESSION['msg'])){
      echo $_SESSION['msg']."<br><br>";
      unset($_SESSION['msg']);
    }

    ?>
    
    <form method="POST" action="processa.php" enctype="multipart/form-data">
      <?php
         echo '<input type="hidden" id="rest_id" name="rest_id" value="'.$_GET['id_rest'].'">';
      ?>
      <div class="estrelas">
        <input type="radio" id="vazio" name="estrela" value="" checked>
        
        <label for="estrela_um"><i class="fa">Ruim</i></label>
        <input type="radio" id="estrela_um" name="estrela" value="1">
        
        <label for="estrela_dois"><i class="fa">Razoável</i></label>
        <input type="radio" id="estrela_dois" name="estrela" value="2">
        
        <label for="estrela_tres"><i class="fa">Bom</i></label>
        <input type="radio" id="estrela_tres" name="estrela" value="3">
        
        <label for="estrela_quatro"><i class="fa">Ótimo</i></label>
        <input type="radio" id="estrela_quatro" name="estrela" value="4">
        
        <label for="estrela_cinco"><i class="fa">Muito bom</i></label>
        <input type="radio" id="estrela_cinco" name="estrela" value="5"><br><br>
        
        <br>
        <input class= "btn btn-light" type="submit" style="width: 100%;" value="Cadastrar">
        
      </div>
    </form>

  </div>


</div>

<?php 
 
  }

 ?>

<br>



<a href="index.php" type="btn" class="btn btn-light" style="margin-left: 3%; float:left;">Voltar</a>
<br>

</div>
</div>
<br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</body>
</html>

<?php
include 'rodape.php';
?>