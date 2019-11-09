<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

</head>
<body>
<div class="card-deck" style="margin-bottom: 1% ;margin-left: 0.1%; margin-right: 10%; width: 100%;">
<?php
header('Content-Type: text/html; charset=utf-8');
	//recebemos nosso parâmetro vindo do form
	$parametro = isset($_POST['pesquisaCliente']) ? $_POST['pesquisaCliente'] : null;
	$msg = "";

				//requerimos a classe de conexão
				require_once('class/Conexao2.class.php');
					try {
						$pdo = new Conexao(); 
						$resultado = $pdo->select("SELECT * FROM restaurante WHERE nome LIKE '$parametro%' ORDER BY nome ASC");
						$pdo->desconectar();
								
						}catch (PDOException $e){
							echo $e->getMessage();
						}	
						//resgata os dados na tabela
					if(count($resultado)){
						foreach ($resultado as $row) {

						
?>
<div style="width: 20%">
<div class="card">
        <center><p class="card-text"><h5 class="card-title"><?php echo $row['nome'];?></h5></p></center>
            <?php 
               $img_dir = "imagens/restaurantes/". $row['id_rest'] . "/";
                if (is_dir($img_dir)) {
                    $image = glob($img_dir . "*")[0];
                    $index = 3;
                          echo '<center><div>

                            <a href="read_restaurante.php?id_rest='.$row['id_rest'].'"><img src="'.$image.'" style="width: 100%";></a>


                          </div></center>';
                            
                        
                } else {
                    echo "<img style='width: 100%' src='img/sem-imagem.png'>";
                }

              ?>
    <div class="card-body">
      <h5 class="card-title"></h5>
        
        <p class="card-text"><strong>Informações do Restaurante</strong></p>
        <p class="card-text">Estado: <?php echo $row['estado'];?></p>
        <p class="card-text">Cidade: <?php echo $row['cidade'];?></p>
        <p class="card-text">Endereço: <?php echo $row['endereco'];?>, <?php echo $row['numero'];?></p>
    
    </div>
  
  </div>
  </div>
<?php
	}	
?>
 </div>
            <?php                echo ' ';


                  //$msg .=" <th><a class='btn btn-light' href='read_restaurante.php?id_rest='".$row['id_rest'].">Visualizar</a></th>"; //não pega id

                            echo ' ';

						}else{
							$msg = "";
							$msg .="Nenhum resultado foi encontrado...";
						}
	$msg .="	</tbody>";
	$msg .="</table>";

	//retorna a msg concatenada
	echo $msg;

	
?>
</body>
</html>