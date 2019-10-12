<?php
	//recebemos nosso parâmetro vindo do form
	$parametro = isset($_POST['pesquisaCliente']) ? $_POST['pesquisaCliente'] : null;
	$msg = "";
	//começamos a concatenar nossa tabela
	$msg .="table class='table table-striped'";
	$msg .="	<thead>";
	$msg .="		<tr>";
	$msg .="			<th scope='col'>Id</th>";
	$msg .="			<th scope='col'>Nome</th>";
	$msg .="			<th scope='col'>Sexo</th>";
	$msg .="			<th scope='col'>Data de Nascimento</th>";
	$msg .="			<th scope='col'>E-mail</th>";
	$msg .="		</tr>";
	$msg .="	</thead>";
	$msg .="	<tbody>";
				//requerimos a classe de conexão
				require_once('class/Conexao2.class.php');
					try {
						$pdo = new Conexao(); 
						$resultado = $pdo->select("SELECT * FROM usuario WHERE nome LIKE '$parametro%' ORDER BY nome ASC");
						$pdo->desconectar();
								
						}catch (PDOException $e){
							echo $e->getMessage();
						}	
						//resgata os dados na tabela
						if(count($resultado)){
							foreach ($resultado as $row) {

						$msg .="				<tr>";
						$msg .="					<th scope='row'>". $row['id_user'] . "</th>";
						$msg .="					'<td>'". $row['nome'] . '</td>';
						$msg .="					'<td>'". $row['sexo'] . '</td>';
						$msg .="					'<td>'". $row['dt_nascimento'] . '</td>';
						$msg .="					'<td>'". $row['email'] . '</td>';

						   echo '<a class="btn btn-light" href="read_usuario.php?id_rest='.$row['id_user'].'">Visualizar</a>';
					                            echo ' ';
						$msg .="				</tr>";

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