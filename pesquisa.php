<?php
	//recebemos nosso parâmetro vindo do form
	$parametro = isset($_POST['pesquisaCliente']) ? $_POST['pesquisaCliente'] : null;
	$msg = "";
	//começamos a concatenar nossa tabela
	$msg .="<table class='table table-hover'>";
	$msg .="	<thead>";
	$msg .="		<tr>";
	$msg .="			<th>Nome:</th>";
	$msg .="			<meta><th>Endereço:</th>";
	$msg .="			<th>Numero:</th>";
	$msg .="			<th>horario_funcionamento:</th>";
	$msg .="			<th>Ação</th>";
	$msg .="		</tr>";
	$msg .="	</thead>";
	$msg .="	<tbody>";
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

	$msg .="				<div><tr>";
	$msg .="					<td>".$row['nome']."</td>";
	$msg .="					<td>".$row['endereco']."</td>";
	$msg .="					<td>".$row['numero']."</td>";
	$msg .="					<td>".$row['horario_funcionamento'].", ".$row['horario_funcionamento']."</td>";

	$msg .=' <th><a class="btn btn-light" href="read_restaurante.php?id_rest='.$row['id_rest'].'">Visualizar</a></th>'; //n pega id
	$msg .="				</tr></div>";
 
                            echo ' ';


                  //$msg .=" <th><a class='btn btn-light' href='read_restaurante.php?id_rest='".$row['id_rest'].">Visualizar</a></th>"; //não pega id

                            echo ' ';

							}	
						}else{
							$msg = "";
							$msg .="Nenhum resultado foi encontrado...";
						}
	$msg .="	</tbody>";
	$msg .="</table>";

	//retorna a msg concatenada
	echo $msg;

	
?>