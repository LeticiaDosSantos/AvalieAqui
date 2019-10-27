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


 $id_tipo_comida = null;
    if(!empty($_GET['id_tipo_comida']))
    {
        $id_tipo_comida = $_REQUEST['id_tipo_comida'];
    }

    if(null==$id_tipo_comida)
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

    $pdo = Banco::conectar();
    $sql = 'SELECT * FROM restaurante_categoria c inner join restaurante r on (r.id_rest=c.id_restaurante) where id_tipo_comida=1';

?>

<?php foreach($pdo->query($sql)as $row)
    {
    	?>

  <nav class="nav justify-content-center"> 
  </nav>
  <center>
    <a class="nav-link" style="color: black; font-size: 30px; font-family:all;">Restaurante de Comida <?php echo $row['id_tipo_comida'];?></a>
  </center>
  <br>
  <div id="linha" style="width: 70%; border-bottom: 1.2px solid #000000; position: center; margin-left: 15%;
}">
  </div> 
  <br>

<div>
<div>
<div class="card-deck" style="margin-bottom: 1% ;margin-left: 2.5%; width: 21.5%;">

  <div class="card">
  <!-- <img src="img/localizacao.jpg" class="card-img-top" alt="..." style="width: 50%"></center>-->
 
      <center><p class="card-text"><h5 class="card-title"><?php echo $row['nome'];?></h5></center>
            <?php 
                $img_dir = "imagens/restaurantes/".$row['id_rest'] . "/";
                if (is_dir($img_dir)) {
                    $images = glob($img_dir . "*");
                    $index = 1;
                        foreach($images as $image)
                        {
                          $index++;
                          echo '<center><div>

                            <a href="read_restaurante.php?id_rest='.$row['id_rest'].'"><img src="'.$image.'" style="width: 100%";></img></a>


                          </div></center>';
                            
                        }
                } else {
                    echo "Eu não tenho imagens.";
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
</div>
                        	<?php  }
                           
                        Banco::desconectar();
                        ?>
   

</body>
<footer>
	<?php include "rodape.php"; ?>
</footer>
</html>






