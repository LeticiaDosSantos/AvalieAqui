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

<body>
    <div class="container">
        <div clas="span10 offset1">
          <div class="card">
            <div class="card-header">
                <h3 class="well"> Cadastrar Restaurante </h3>
            </div>
            <div class="card-body">
            <form class="form-horizontal" action="create_restaurante.php" method="post">

                <div class="control-group <?php echo !empty($nomeErro)?'error ' : '';?>">
                    <label class="control-label">Nome</label>
                    <div class="controls">
                        <input size="50" class="form-control" name="nome" type="text" placeholder="Nome" required="" value="<?php echo !empty($nome)?$nome: '';?>">
                        <?php if(!empty($nomeErro)): ?>
                            <span class="help-inline"><?php echo $nomeErro;?></span>
                            <?php endif;?>
                    </div>
                </div>

                <div class="control-group <?php echo !empty($enderecoErro)?'error ': '';?>">
                    <label class="control-label">Endereço</label>
                    <div class="controls">
                        <input size="80" class="form-control" name="endereco" type="text" placeholder="Endereço" required="" value="<?php echo !empty($endereco)?$endereco: '';?>">
                        <?php if(!empty($emailErro)): ?>
                            <span class="help-inline"><?php echo $enderecoErro;?></span>
                            <?php endif;?>
                    </div>
                </div>

                <div class="control-group <?php echo !empty($telefoneErro)?'error ': '';?>">
                    <label class="control-label">Telefone</label>
                    <div class="controls">
                        <input size="35" class="form-control" name="telefone" type="text" placeholder="Telefone" required="" value="<?php echo !empty($telefone)?$telefone: '';?>">
                        <?php if(!empty($emailErro)): ?>
                            <span class="help-inline"><?php echo $telefoneErro;?></span>
                            <?php endif;?>
                    </div>
                </div>

                <div class="control-group <?php echo !empty($emailErro)?'error ': '';?>">
                    <label class="control-label">Email</label>
                    <div class="controls">
                        <input size="40" class="form-control" name="email" type="text" placeholder="Email" required="" value="<?php echo !empty($email)?$email: '';?>">
                        <?php if(!empty($emailErro)): ?>
                            <span class="help-inline"><?php echo $emailErro;?></span>
                            <?php endif;?>
                    </div>
                </div>

                <div class="control-group <?php echo !empty($estadoErro)?'error ': '';?>">
                    <label class="control-label">Estado</label>
                    <div class="controls">
                        <div class="form-check">
                            <p class="form-check-label">
                                <input class="form-check-input" type="radio" name="estado" id="estado" value="M" <?php echo ($estado=="PR" ) ? "checked" : null; ?>/> PR
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="estado" id="estado" value="F" <?php echo ($estado=="RS" ) ? "checked" : null; ?>/> RS
                        </div>  <div class="form-check">
                            <input class="form-check-input" type="radio" name="estado" id="estado" value="F" <?php echo ($estado=="SC" ) ? "checked" : null; ?>/> SC
                        </div>


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
        $telefoneErro = null;
        $emailErro = null;
        $estadoErro = null;

        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $estado = $_POST['estado'];

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
            $sql = "INSERT INTO restaurante (nome, endereco, telefone, email, estado) VALUES(?,?,?,?,?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($nome,$endereco,$telefone,$email,$estado));
            Banco::desconectar();
            header("Location: index.php");
        }
    }
?>
