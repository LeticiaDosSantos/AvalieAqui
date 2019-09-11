<?php

    include "cabecalho.php";

	require 'banco.php';

	$id_rest = null;
	if ( !empty($_GET['id_rest']))
            {
		$id_rest = $_REQUEST['id_rest'];
            }

	if ( null==$id_rest ){
		header("Location: index.php");
    }

	if ( !empty($_POST)){

		$nomeErro = null;
        $descricaoErro = null;
        $telefoneErro = null;
        $horario_funcionamentoErro = null;
        $estadoErro = null;
        $enderecoErro = null;
        $numeroErro = null;

		$nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $telefone = $_POST['telefone'];
		$horario_funcionamento = $_POST['horario_funcionamento'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];
        $numero = $_POST['numero'];
        

		//Validação
		$validacao = true;
		if (empty($nome))
                {
                    $nomeErro = 'Por favor digite o nome!';
                    $validacao = false;
                }

		if (empty($desricao))
                {
                    $descricaoErro = 'Por favor digite a descricao!';
                    $validacao = false;
		}
                else if ( !filter_var($telefone/*,FILTER_VALIDATE_EMAIL*/) )
                {
                    $telefoneErro = 'Por favor digite um telefone válido!';
                    $validacao = false;
		}

                if (empty($horario_funcionamento))
                {
                    $horario_funcionamentoErro = 'Por favor digite o horrário de funcionamento!';
                    $validacao = false;
		}

        if (empty($estado))
                {
                    $estadoErro = 'Por favor digite o estado!';
                    $validacao = false;
        }


                if (empty($endereco))
                {
                    $enderecoErro = 'Por favor preencha o campo de endereço!';
                    $validacao = false;
        }

                if (empty($numero))
                {
                    $numeroErro = 'Por favor preencha o número do restaurante!';
                    $validacao = false;
		}

		// update data
		if ($validacao)
                {
                    $pdo = Banco::conectar();
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql = "UPDATE restaurante set nome = ?, descricao = ?, telefone = ?, horario_funcionamento = ?, estado = ?, endereco = ?, numero = ? WHERE id_rest = ?";
                    $q = $pdo->prepare($sql);
                    $q->execute(array($nome,$descricao,$telefone,$horario_funcionamento,$estado,$endereco,$numero,$id_rest));
                    Banco::desconectar();
                    header("Location: buscar_restaurantes.php");
		}
	}
        else
            {
        $pdo = Banco::conectar();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM restaurante where id_rest = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($id_rest));
		$data = $q->fetch(PDO::FETCH_ASSOC);
        $nome = $data['nome'];
		$descricao = $data['descricao'];
        $telefone = $data['telefone'];
        $horario_funcionamento = $data['horario_funcionamento'];
        $estado = $data['estado'];
        $endereco = $data['endereco'];
        $numero = $data['numero'];
		Banco::desconectar();
	}
?>

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
				<title>Atualizar Contato</title>
    </head>
<br>
    <body>
        <div class="container">

            <div class="span10 offset1">
							<div class="card">
								<div class="card-header">
                    <h3 class="well"> Atualizar Contato </h3>
                </div>
								<div class="card-body">
                <form class="form-horizontal" action="update.php?id=<?php echo $id?>" method="post">


                    <div class="control-group <?php echo !empty($nomeErro)?'error':'';?>">
                        <label class="control-label">Nome</label>
                        <div class="controls">
                            <input name="nome" class="form-control" size="50" type="text" placeholder="Nome" value="<?php echo !empty($nome)?$nome:'';?>">
                            <?php if (!empty($nomeErro)): ?>
                                <span class="help-inline"><?php echo $nomeErro;?></span>
                                <?php endif; ?>
                        </div>
                    </div>


                    <div class="control-group <?php echo !empty($descricaoErro)?'error':'';?>">
                        <label class="control-label">Descricao</label>
                        <div class="controls">
                            <input name="descricao" class="form-control" size="50" type="text" placeholder="Descreva o restaurante" value="<?php echo !empty($descricao)?$descricao:'';?>">
                            <?php if (!empty($descricaoErro)): ?>
                                <span class="help-inline"><?php echo $descricaoErro;?></span>
                                <?php endif; ?>
                        </div>
                    </div>

                    <div class="control-group <?php echo !empty($telefoneErro)?'error':'';?>">
                        <label class="control-label">Telefone</label>
                        <div class="controls">
                            <input name="telefone" class="form-control" size="30" type="text" placeholder="Telefone" value="<?php echo !empty($telefone)?$telefone:'';?>">
                            <?php if (!empty($telefoneErro)): ?>
                                <span class="help-inline"><?php echo $telefoneErro;?></span>
                                <?php endif; ?>
                        </div>
                    </div>
    
                    <div class="control-group <?php echo !empty($horario_funcionamentoErro)?'error':'';?>">
                        <label class="control-label">Horário de Funcionamento</label>
                        <div class="controls">
                            <input name="horario_funcionamento" class="form-control" size="30" type="text" placeholder="Digite aqui" value="<?php echo !empty($horario_funcionamento)?$horario_funcionamento:'';?>">
                            <?php if (!empty($horario_funcionamentoErro)): ?>
                                <span class="help-inline"><?php echo $horario_funcionamrntoErro;?></span>
                                <?php endif; ?>
                        </div>
                    </div>

                    <div class="control-group <?php echo !empty($estadoErro)?'error':'';?>">
                        <label class="control-label">Estado</label>
                        <div class="controls">
                            <div class="form-check">
                            </div>  <div class="form-check">
                                <input class="form-check-input" type="radio" name="estado" id="estado" value="PR" <?php echo ($estado=="PR" ) ? "checked" : null; ?>/> Paraná
                            </div>
                                <p class="form-check-label">
                                    <input class="form-check-input" type="radio" name="estado" id="estado" value="RS" <?php echo ($estado=="RS" ) ? "checked" : null; ?>/> Rio Grande do Sul
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="estado" id="estado" value="SC" <?php echo ($estado=="SC" ) ? "checked" : null; ?>/> Santa Catarina
                            </p>
                            <?php if (!empty($estadoErro)): ?>
                                <span class="help-inline"><?php echo $estadoErro;?></span>
                                <?php endif; ?>
                        </div>
                    </div>

                    <div class="control-group <?php echo !empty($enderecoErro)?'error':'';?>">
                        <label class="control-label">Endereço</label>
                        <div class="controls">
                            <input name="endereco" class="form-control" size="80" type="text" placeholder="Endereço" value="<?php echo !empty($endereco)?$endereco:'';?>">
                            <?php if (!empty($enderecoErro)): ?>
                                <span class="help-inline"><?php echo $enderecoErro;?></span>
                                <?php endif; ?>
                        </div>
                    </div>

                    <div class="control-group <?php echo !empty($numeroErro)?'error':'';?>">
                        <label class="control-label">Número</label>
                        <div class="controls">
                            <input name="numero" class="form-control" size="80" type="text" placeholder="numero" value="<?php echo !empty($numero)?$numero:'';?>">
                            <?php if (!empty($numeroErro)): ?>
                                <span class="help-inline"><?php echo $numeroErro;?></span>
                                <?php endif; ?>
                        </div>
                    </div>

                    <br/>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-warning">Atualizar</button>
                        <a href="index.php" type="btn" class="btn btn-default">Voltar</a>
                    </div>
                </form>
							</div>
						</div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="assets/js/bootstrap.min.js"></script>
    </body>

    </html>

<?php
    include "rodape.php";
?>