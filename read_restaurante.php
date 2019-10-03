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

         <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
    <link rel="stylesheet" type="text/css" href="assets/css/carrossel.css">




      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>


      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>

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
                <div class="container">
                <div class="form-horizontal" style="margin-left: 40%">
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

                     <div class="control-group">
                        <label style="font-size: 14pt" class="control-label">Numero: </label>
                                <?php echo $data['numero'];?>
                    </div>

                     <div class="control-group">
                        <label style="font-size: 14pt" class="control-label">Horario de funcionamento: </label>
                                <?php echo $data['horario_funcionamento'];?>
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
                   
<!--CARROSSEL-->

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
      <img class="carousel__image" />
            <?php 
                $img_dir = "imagens/restaurantes/". $id_rest . "/";
                if (is_dir($img_dir)) {
                    $images = glob($img_dir . "*");
                        foreach($images as $image)
                        {
                            echo '<img src='.$image.' width=80% height=40%> </img>';
                        }
                } else {
                    echo "Eu não tenho imagens.";
                }

            ?>
    </aside>
  </main>
</section>


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
<p></p>

<br>
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
    </html>

<?php
    include 'rodape.php';
?>
