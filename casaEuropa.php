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

<br>
<br>
 <nav class="nav justify-content-center"> 
  <a class="nav-link" href="#" style="color: black; font-size: 30px; font-family:all;">Restaurante Casa Europa </a>
</nav>
<br>
<br>


<p></p>

<div id="linha" style="width: 70%; border-bottom: 1.2px solid #000000; position: center; margin-left: 15%;"> </div>

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
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Faça a sua avaliação aqui </h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary"></a>
  </div>
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

<div class="card-deck">

  <div class="card">
    <img src="img/italianaaa.png" class="card-img-top" alt="...">
   
  </div>
  <div class="card">
    <img src="img/italianaaa.png" class="card-img-top" alt="...">
    
  </div>
  <div class="card">
    <img src="img/italianaaa.png" class="card-img-top" alt="...">
    
  </div>
</div>

<br>

<br>

<br>

<ul class="slider">
     <li>
           <input type="radio" id="slide1" name="slide" checked>
           <label for="slide1"></label>
           <img src="img/italianaaa.png" />
     </li>
     <li>
           <input type="radio" id="slide2" name="slide">
           <label for="slide2"></label>
           <img src="img/guacamole.png" />
     </li>
     <li>
           <input type="radio" id="slide3" name="slide" >
           <label for="slide3" ></label> <!--isso aqui é os botao-->
           <img src="img/italianaaa.png" />
     </li>
     <li>
           <input type="radio" id="slide4" name="slide" >
           <label for="slide4" ></label> <!--isso aqui é os botao-->
           <img src="img/guacamole.png" />
     </li>
     <li>
           <input type="radio" id="slide5" name="slide" >
           <label for="slide5" ></label> <!--isso aqui é os botao-->
           <img src="img/italianaaa.png" />
     </li>
     <li>
           <input type="radio" id="slide6" name="slide" >
           <label for="slide6" ></label> <!--isso aqui é os botao-->
           <img src="img/guacamole.png" />
     </li>
</ul>

<br>
<p>
  <br><br>
<br>
<!--PROXIMO CARROSSEL-->

<section class="carousel">
  <input type="radio" name="carousel" id="carousel1" checked="checked" />
  <input type="radio" name="carousel" id="carousel2" />
  <input type="radio" name="carousel" id="carousel3" />
  <input type="radio" name="carousel" id="carousel4" />
  
  <main class="carousel__stage">  
    <aside class="carousel__item">      
      <img class="carousel__image" src="img/italianaaa.png" />
      <label for="carousel2" class="carousel__next"></label>
    </aside>
    
    <aside class="carousel__item">
      <label for="carousel1" class="carousel__prev"></label>
      <img class="carousel__image" src="img/guacamole.png" />
      <label for="carousel3" class="carousel__next"></label>
    </aside>
    
    <aside class="carousel__item">
      <label for="carousel2" class="carousel__prev"></label>
      <img class="carousel__image" src="img/italianaaa.png" />
      <label for="carousel4" class="carousel__next"></label>
    </aside>
    
    <aside class="carousel__item">
      <label for="carousel3" class="carousel__prev" ></label>
      <img class="carousel__image" src="img/guacamole.png"/>
    </aside>
  </main>
</section>

<br><br><br>
<!--PROXIMA GALERIA-->
<div class="container">
  
 <img id="imagem1" src="img/italianaaa.png" alt="Balneário Camboriú - Praia 1" width="300" height="200" onclick="clique(this)">
            <img id="imagem2" src="img/guacamole.png" alt="Guacamole  - Praia 2" width="300" height="200" onclick="clique(this)">
            <img id="imagem3" src="img/italianaaa.png" alt="Balneário Camboriú - Praia 3" width="300" height="200" onclick="clique(this)">

            <div id="janelaModal" class="modalVisual">
                  <span class="fechar">x</span>
                  <img class="modalConteudo" id="imgModal">
                  <div id="txtImg"></div>
            </div>
</div>
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