<?php
include ("cabecalho.php");
?>


<!DOCTYPE html>
<html lang="pt-br">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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

    <img id="image" src="img/fachada.png" style="width:100%; cursor: auto">

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

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/bootstrapbuscar.css">
  <link rel="stylesheet" href="assets/css/Bootstrap/bootstrap.min.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
  <title>Avalie Aqui</title>

  <link rel="stylesheet" type="text/css" href="css/Bootstrap-buscar.css">

  <style type="text/css">
    #pesquisaCliente{
      width:500px;
      margin-top: 2%;
    }
    #form_pesquisa{
      margin-top: 2%;
    }
  </style>
  <br>
  <script type="text/javascript" src="js/jquery-2.1.0.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){

    //Aqui a ativa a imagem de load
    function loading_show(){
      $('#loading').html("<img src='img/loading.gif'/>").fadeIn('fast');
    }
    
    //Aqui desativa a imagem de loading
    function loading_hide(){
      $('#loading').fadeOut('fast');
    }       
    
    
    // aqui a função ajax que busca os dados em outra pagina do tipo html, não é json
    function load_dados(valores, page, div)
    {
      $.ajax
      ({
        type: 'POST',
        dataType: 'html',
        url: page,
                beforeSend: function(){//Chama o loading antes do carregamento
                  loading_show();
                },
                data: valores,
                success: function(msg)
                {
                  loading_hide();
                  var data = msg;
                  $(div).html(data).fadeIn();             
                }
              });
    }
    
    //Aqui eu chamo o metodo de load pela primeira vez sem parametros para pode exibir todos
    load_dados(null, 'pesquisa.php', '#MostraPesq');


    
    
    //Aqui uso o evento key up para começar a pesquisar, se valor for maior q 0 ele faz a pesquisa
    $('#pesquisaCliente').keyup(function(){

        var valores = $('#form_pesquisa').serialize()//o serialize retorna uma string pronta para ser enviada
        
        //pegando o valor do campo #pesquisaCliente
        var $parametro = $(this).val();
        
        if($parametro.length >= 1)
        {
          load_dados(valores, 'pesquisa.php', '#MostraPesq');
        }else
        {
          load_dados(null, 'pesquisa.php', '#MostraPesq');
        }
      });

  });
</script>   
</head>
<body>
  <center>
    <article>
      <form name="form_pesquisa" id="form_pesquisa" method="post" action="">
        <fieldset>
          <legend style="font-family:all;">Digite o nome a pesquisar</legend>
          <div class="input-prepend" style="margin-left: 27%">
            <span class="add-on"><i class="icon-search"></i></span>
            <div class="input-group input-group-sm mb-3">
              <div class="input-group-prepend">
                <input class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" type="text" name="pesquisaCliente" id="pesquisaCliente" value="" tabindex="1" placeholder="Pesquisar restaurante..." />
              </div>
            </div>
          </div>
          <br>

        </fieldset>
      </form>
      <div id="contentLoading">
        <div id="loading"></div>
      </div>
      <section class="jumbotron">
        <div id="MostraPesq"></div>
      </section>
    </article>
  </center>
</body>
</html>

<?php
include ("rodape.php");
?>

