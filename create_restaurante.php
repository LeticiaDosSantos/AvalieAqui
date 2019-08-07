<?php
    include 'cabecalho.php';
    $estado = "Indefinido";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <title>Avalie Aqui - Cadastrar Restaurante</title>
</head>

<br>
<br>
<br>
<!--
<div>

<h1>Cadastre o seu Restaurante


</div>


!-->

<body>
    <div class="container">
        <div clas="span10 offset1">
          <div class="card">
            <div class="card-header">
                <h3 class="well"> Cadastre seu Restaurante </h3>
            </div>    
          </div>
        </div>
            
    </div>

    <br>
    <br>
 <div class="container">
        <div clas="span10 offset1">
            <div class="card">
            <div class="card-body">
            <form class="form-horizontal" action="create_restaurante.php" method="post">

                <div class="control-group <?php echo !empty($nomeErro)?'error ' : '';?>">
                    <label class="control-label">Nome do Restaurante</label>
                    <div class="controls">
                        <input size="50" class="form-control" name="nome" type="text" placeholder="Nome" required="" value="<?php echo !empty($nome)?$nome: '';?>">
                        <p></p>
                        <?php if(!empty($nomeErro)): ?>
                            <span class="help-inline"><?php echo $nomeErro;?></span>
                            <?php endif;?>
                    </div>
                </div>

                <div class="control-group <?php echo !empty($enderecoErro)?'error ': '';?>">
                    <label class="control-label">Endereço</label>
                    <div class="controls">
                        <input size="80" class="form-control" name="endereco" type="text" placeholder="Endereço" required="" value="<?php echo !empty($endereco)?$endereco: '';?>">
                        <p></p>
                        <?php if(!empty($emailErro)): ?>
                            <span class="help-inline"><?php echo $enderecoErro;?></span>
                            <?php endif;?>
                    </div>
                </div>


                 <div class="control-group <?php echo !empty($numeroErro)?'error ': '';?>">
                    <label class="control-label">Número</label>
                        <div class="controls">
                         <input size="80" class="form-control" name="numero" type="tel" placeholder="Número" required="" value="<?php echo !empty($numero)?$numero: '';?>">
                         <p></p>
                        <?php if(!empty($numeroErro)): ?>
                            <span class="help-inline"><?php echo $numeroErro;?></span>
                            <?php endif;?>
                    </div>

                 <div class="control-group <?php echo !empty($descricaoErro)?'error ': '';?>">
                    <label class="control-label">Descriçao</label>
                        <div class="controls">
                         <input size="80" class="form-control" name="descricao" type="textarea" placeholder="Descrição" required="" value="<?php echo !empty($descricao)?$descricao: '';?>">
                         <p></p>
                        <?php if(!empty($descricaoErro)): ?>
                            <span class="help-inline"><?php echo $descricaoErro;?></span>
                            <?php endif;?>
                    </div>

                 <div class="control-group <?php echo !empty($horario_funcionamentoErro)?'error ': '';?>">
                    <label class="control-label">Horário de Funcionamento</label>
                        <div class="controls">
                         <input size="80" class="form-control" name="descricao" type="text" placeholder="De segunda à sexta, das 11:00 ao 12:00" required="" value="<?php echo !empty($horario_funcionamento)?$horario_funcionamento: '';?>">
                         <p></p>
                        <?php if(!empty($horario_funcionamentoErro)): ?>
                            <span class="help-inline"><?php echo $horario_funcionamentoErro;?></span>
                            <?php endif;?>
                    </div>
                </div>
                <div class="control-group <?php echo !empty($telefoneErro)?'error ': '';?>">
                    <label class="control-label">Telefone</label>
                    <div class="controls">
                        <input size="35" class="form-control" name="telefone" type="text" placeholder="Telefone" required="" value="<?php echo !empty($telefone)?$telefone: '';?>">
                        <p></p>
                        <?php if(!empty($emailErro)): ?>
                            <span class="help-inline"><?php echo $telefoneErro;?></span>
                            <?php endif;?>
                    </div>
                </div>

                <div class="control-group <?php echo !empty($emailErro)?'error ': '';?>">
                    <label class="control-label">Email</label>
                    <div class="controls">
                        <input size="40" class="form-control" name="email" type="email" placeholder="name@example.com" required="" value="<?php echo !empty($email)?$email: '';?>">
                        <p></p>
                        <?php if(!empty($emailErro)): ?>
                            <span class="help-inline"><?php echo $emailErro;?></span>
                            <?php endif;?>
                    </div>
                </div>



                <div class="control-group <?php echo !empty($emailErro)?'error ': '';?>">
                    <label class="control-label">Estado</label>
                    <div class="controls">

                        <select class="form-control" name="Estado" value="Estado">
                          
                          <option value="parana">Paraná</option>
                          <option value="rio">Rio Grande do Sul</option>
                          <option>Santa Catarina</option>
                      </select>

                        <input size="40" class="form-control" name="estado" type="text" placeholder="Estado" required="" value="<?php echo !empty($estado)?$estado: '';?>">
                        <p></p>
                        <?php if(!empty($emailErro)): ?>
                            <span class="help-inline"><?php echo $emailErro;?></span>
                            <?php endif;?>
                    </div>
                </div>




      <label for="inputState" >Estado</label>
      <select id="inputState" class="form-control">
        <option selected>Santa Catarina</option>
        <option>Paraná</option>
        <option>Rio Grande do Sul</option>
        

      </select>
    </div>







                <div class="control-group <?php echo !empty($estadoErro)?'error ': '';?>">
                    <label class="control-label">Estado</label>
                    <div class="controls">
                        <div class="form-check">
                            <p class="form-check-label">
                                <input class="form-check-input" type="radio" name="estado" id="estado" value="PR" <?php echo ($estado=="PR" ) ? "checked" : null; ?>/> PR
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="estado" id="estado" value="RS" <?php echo ($estado=="RS" ) ? "checked" : null; ?>/> RS
                        </div>  <div class="form-check">
                            <input class="form-check-input" type="radio" name="estado" id="estado" value="SC" <?php echo ($estado=="SC" ) ? "checked" : null; ?>/> SC
                        </div>
                        <p></p>

              <form>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Escolha suas imagens</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
             </form>


                        </p>
                        <?php if(!empty($estadoErro)): ?>
                            <span class="help-inline"><?php echo $estadoErro;?></span>
                            <?php endif;?>
                    </div>
                </div>
                <div class="form-actions">
                    <br/>

                    <button type="submit" class="btn btn-success">Adicionar</button>
                    <a href="index.php" type="btn" class="btn btn-default">Voltar</a>

                </div>
            </form>
          </div>
        </div>
        </div>
    </div>
    </div>

</div>

</divS>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>

<?php
    require 'banco.php';

    if(!empty($_POST))
    {
        //Acompanha os erros de validação
        $nomeErro = null;
        $enderecoErro = null;
        $numero=null;
        $telefoneErro = null;
        $emailErro = null;
        $estadoErro = null;
        $descricao = null;
        $horario_funcionamento = null;

        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $numero = $_POST['numero'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $estado = $_POST['estado'];
        $descricao = $_POST['descricao'];
        $horario_funcionamento = $POST['horario_funcio'];

        //Validaçao dos campos:
        $validacao = true;
        if(empty($nome))
        {
            $nomeErro = 'Por favor digite o seu nome!';
            $validacao = false;
        }

        if(empty($endereco))
        {
            $enderecoErro = 'Por favor digite o seu endereço!';
            $validacao = false;
        }

        if(empty($numero))
        {
            $numeroErro = 'Por favor digite o número!';
            $validacao = false;
        }

        if(empty($descricao))
        {
            $descricaoErro = 'Por favor, digite uma descrição para o restaurante!';
            $validacao = false;
        }

        if(empty($horario_funcionamento))
        {
           $horario_funcionamentoErro = 'Por favor, digite uma descrição para o restaurante!';
            $validacao = false;
        }

        if(empty($telefone))
        {
            $telefoneErro = 'Por favor digite o número do telefone!';
            $validacao = false;
        }

        if(empty($email))
        {
            $telefoneErro = 'Por favor digite o endereço de email';
            $validacao = false;
        }
        elseif (!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            $emailError = 'Por favor digite um endereço de email válido!';
            $validacao = false;
        }

        if(empty($estado))
        {
            $estadoErro = 'Por favor digite o campo!';
            $validacao = false;
        }

        //Inserindo no Banco:
        if($validacao)
        {
            $pdo = Banco::conectar();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO restaurante (nome, endereco, numero, telefone, email, estado, descricao, horario_funcionamento) VALUES(?,?,?,?,?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($nome,$endereco, $numero,$telefone,$email,$estado,$descricao,$horario_funcionamento));
            Banco::desconectar();
            header("Location: index.php");
        }
    }

?>

<br>
<br>

<?php

    include("rodape.php");
?>
