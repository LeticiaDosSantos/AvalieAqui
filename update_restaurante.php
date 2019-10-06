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
        $cidadeErro = null;
        $enderecoErro = null;
        $numeroErro = null;

		$nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $telefone = $_POST['telefone'];
		$horario_funcionamento = $_POST['horario_funcionamento'];
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];
        $endereco = $_POST['endereco'];
        $numero = $_POST['numero'];
        
		//Validação
		$validacao = true;
		if (empty($nome))
                {
                    $nomeErro = 'Por favor digite o nome!';
                    $validacao = false;
                }

		if (empty($descricao))
                {
                    $descricaoErro = 'Por favor digite a descricao!';
                    $validacao = false;
		}

                if ( !filter_var($telefone/*,FILTER_VALIDATE_EMAIL*/) )
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

        if (empty($cidade))
                {
                    $cidadeErro = 'Por favor selecione a cidade!';
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
                    $sql = "UPDATE restaurante set nome = ?, descricao = ?, telefone = ?, horario_funcionamento = ?, estado = ?, cidade = ?, endereco = ?, numero = ? WHERE id_rest = ?";
                    $q = $pdo->prepare($sql);
                    $q->execute(array($nome,$descricao,$telefone,$horario_funcionamento,$estado,$cidade,$endereco,$numero,$id_rest));
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
        $cidade = $data['cidade'];
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
<center>
          <a class="nav-link" href="#" style="color: black; font-size: 30px; font-family:all;">Atualizar Informações</a>
        </nav><br>
        <div id="linha" style="width: 70%; border-bottom: 1.2px solid #000000; position: center; margin-left: 15%;
}"> </div>   <br><br> </center>
            <div class="span10 offset1">
							<div class="card">
								<div class="card-body">
                <form class="form-horizontal" action="./update_restaurante.php?id_rest=<?php echo $id_rest?>" method="post">


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

                
                    <div class="form-group">
                        <div class="col-lg-20">
                            <label for="select" class="control-label">Selecione o Estado:</label>
                            <select id="estado" name="estado" class="form-control" value="<?php echo $estado;?>"></select>
                            <br>
                            <label for="select" class="control-label">Selecione a Cidade:</label>
                            <select id="cidade" name="cidade" class="form-control" value="<?php echo $cidade;?>"></select>
                        </div>
                    </div>
          

    
  </body>
  <script type="text/javascript">
  //CIDADES E ESTADOS
  new dgCidadesEstados({
    cidade: document.getElementById('cidade'),
    estado: document.getElementById('estado'),
    change: true
});
  </script>
                           

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
                        <a href="index.php" type="btn" class="btn btn-light">Voltar</a>
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
        <script src="cidades-estados-1.2-utf8.js"></script>
        <script>


            new dgCidadesEstados({
            cidade: document.getElementById('cidade'),
            estado: document.getElementById('estado'),
            change: true
        });
        </script>
    </body>

    </html>

<?php
    include "rodape.php";
?>