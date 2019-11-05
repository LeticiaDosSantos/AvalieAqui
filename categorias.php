<?php
include  'cabecalho.php';
?>
<!DOCTYPE html>
<html>
 <head>
	<meta charset="utf-8">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<title>Avalie Aqui - Dados do Restaurante</title>

    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
    <link rel="stylesheet" type="text/css" href="assets/css/carrossel.css">
   
</head>

<body>
<br>
<?php
						
    require 'banco.php';

  $a = $_GET['id_tipo_comida'];

    $pdo = Banco::conectar();
    $sql = 'SELECT * FROM restaurante_categoria c inner join restaurante r on (r.id_rest=c.id_restaurante) inner join tipo_comida t on (c.id_tipo_comida=t.id_comida) where id_tipo_comida='.$a;

?>

  <center>
    <?php foreach($pdo->query($sql)as $row)
      { }
      ?>

    <a class="nav-link" style="color: black; font-size: 30px; font-family:all;">Restaurante de Comida <?php echo $row['categoria'];?></a>
  </center>
  <br>

  <div id="linha" style="width: 70%; border-bottom: 1.2px solid #000000; position: center; margin-left: 15%;
}">
  </div> 

  <br>
  <br>

<div class="card-deck" style="margin-bottom: 1% ;margin-left: 10%; margin-right: 10%; width: 100%;">
<?php foreach($pdo->query($sql)as $row)
    {
    	?>

  <div style="width: 20%">
  <div class="card">
        <center><p class="card-text"><h5 class="card-title"><?php echo $row['nome'];?></h5></center>
            <?php 
               $img_dir = "imagens/restaurantes/". $row['id_rest'] . "/";
                if (is_dir($img_dir)) {
                    $image = glob($img_dir . "*")[0];
                    $index = 3;
                          echo '<center><div>

                            <a href="read_restaurante.php?id_rest='.$row['id_rest'].'"><img src="'.$image.'" style="width: 100%";></img></a>


                          </div></center>';
                            
                        
                } else {
                    echo ' <a href="read_restaurante.php?id_rest='.$row['id_rest'].'"><img src=".img/sem-foto.png." style="width: 100%";></img></a>';
                }

            ?>
    <div class="card-body">
      <h5 class="card-title"></h5>
        
        <p class="card-text"><strong>Informações do Restaurante</strong></p></p>
        <p class="card-text">Estado: <?php echo $row['estado'];?></p></p>
        <p class="card-text">Cidade: <?php echo $row['cidade'];?></p></p>
        <p class="card-text">Endereço: <?php echo $row['endereco'];?>, <?php echo $row['numero'];?></p></p>
    
    </div>
  </div>
  </div>

                  	<?php  }
                           
                        Banco::desconectar();
                        ?>
   </p></center></div></div></body></html>

<footer>
	<?php include "rodape.php"; ?>
</footer>
</html>






