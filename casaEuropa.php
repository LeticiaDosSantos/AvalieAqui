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
   <!-- <link rel="stylesheet" type="text/css" href="assets/css/carrossel.css"> -->



         
<script src="jquery.gallerie.js"></script>
<link rel="stylesheet" type="text/css" href="gallerie.css"/>
<link rel="stylesheet" type="text/css" href="gallerie-effects.css"/>

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>

       <!--aqui é da galeria-->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
     <script src="jquery.gallerie.js"></script>

    <title>Avalie Aqui</title>
</head>
<body>
<br>
<br>
 <nav class="nav justify-content-center"> 
  <a class="nav-link" href="#" style="color: black; font-size: 30px; font-family:all;">Restaurante Casa Europa </a>
 </nav>
<br>
<br>


<p></p>

<div id="linha" style="width: 70%; border-bottom: 1.2px solid #000000; position: center; margin-left: 15%;"> 


</div>

  <br>
  <br>  
  <p></p>

  <div class="container">

    <div class="card" style="width: 70rem;">
       <div class="card-body">
          <p class="card-text">Com fortes referências da cozinha italiana, mas também com outras inspirações da Europa Meridional, a Casa Europa se preocupa em oferecer os melhores ingredientes, criteriosamente selecionados, valorizando sempre o pequeno produtor artesanal. Do mesmo dono dos célebres restaurantes Adega Santiago e Taberna 474, o Casa Europa é uma escolha certeira. 
          No cardápio, preparado com produtos frescos, pratos caseiros como antepastos, massas de fabricação própria e ragus são opções para apreciar e harmonizar com mais de 80 rótulos de vinhos disponíveis, entre tintos, brancos, rosés e espumantes.</p>
       </div>
      <img src="img/italianaaa.png" class="card-img-top" alt="..." style="width: 100%;">
     
      </div>
    </div>


<br>

<br>
<br>
<br>


<div class="container">
  <div class="card" style="width: 20rem;"><!--mudar para 18-->
    <div class="card-body">
      <h5 class="card-title">Faça a sua avaliação aqui </h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary"></a>
  </div>
</div>

  <div class="card" style="width: 20rem;margin-top: -14.8%; margin-left: 35%;"><!--mudar para 18-->
    <div class="card-body">
      <h5 class="card-title">Faça a sua avaliação aqui </h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary"></a>
    </div>
  </div>


  <div class="card" style="width: 20rem;"><!--mudar para 18-->
    <div class="card-body">
      <h5 class="card-title">Faça a sua avaliação aqui </h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary"></a>
    </div>
 
</div>


<br><br>
<br>

 <nav class="nav justify-content-center"> 
  <a class="nav-link" href="#" style="color: black; font-size: 30px; font-family:all;">Galeria de imagens </a>
</nav>
<br>
<br>


<p></p>

<div id="linha" style="width: 70%; border-bottom: 1.2px solid #000000; position: center; margin-left: 15%;"> </div>
<br>
<br>
<br>


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
            <br>
            <br>

          
<script type="text/javascript">
$(document).ready(function(){
  $('#gallery').gallerie();
});

</script>

<style>
    #gallery {
    
    margin-right: auto;
  }
</style>


<div id="gallery">
<a href="img/italianaaa.png"><img class="fotogrande" src="img/italianaaa.png"/></a>
<a href="img/guacamole.png"><img  class="fotogrande"src="img/guacamole.png"/></a>
<a href="img/italianaaa.png"><img class="fotogrande" src="img/italianaaa.png"/></a>
<a href="img/guacamole.png"><img  class="fotogrande"src="img/guacamole.png"/></a>
<a href="img/italianaaa.png"><img class="fotogrande" src="img/italianaaa.png"/></a>

</div>
     
</body>


<br>
<br>
<br>

