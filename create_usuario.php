<?php
$sexo = "Indefinido";
include("cabecalho.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Avalie Aqui</title>
</head>


<br>
<br>

<center>
    <div class="card bg-light mb-3" style="max-width: 18rem;">
      <div class="card-header"></div>
      <div class="card-body">
        <h5 class="card-title">Já possui uma conta?</h5>
        <a class="card-text" href="login.php" style="color: black">Clique para efetuar login</p></a>
    </div></div>
</center>
<br>
<br>
<body style="background-image: url(img/fundoU.jpg); background-size: 130%; background-repeat: no-repeat; 
background-attachment:  fixed;">

<div class="container" style="width: 50%; opacity: 0.92">
    <div clas="span10 offset1">
      <div class="card">
        <div class="card-header">
            
         <nav class="nav justify-content-center"> 
          <a class="nav-link" style="color: black; font-size: 30px; font-family:all;">Cadastre-se aqui</a>
      </nav>
      <br>
      <div id="linha" style="width: 70%; border-bottom: 1.2px solid #000000; position: center; margin-left: 15%;
  }"> </div>
  <br>
</div>
</div>

<br>
<br>
<div class="card">   
    <div class="card-body">
        <form class="form-horizontal" action="create_usuario.php" enctype="multipart/form-data" method="post">

                <!--<div class="control-group <?php //echo !empty($id_userErro)?'error ': '';?>">
                    <label class="control-label">Id</label>
                    <div class="controls">
                        <input size="80" class="form-control" name="id_user" type="text" placeholder="id_user" required="" value="<?php //echo !empty($id_user)?$id_user: '';?>">
                        <?php //if(!empty($id_userErro)): ?>
                            <span class="help-inline"><?php //e//cho $id_userErro;?></span>
                            <?php// endif;?>-->
                            

                            <div class="control-group <?php echo !empty($nomeErro)?'error ' : '';?>">
                                <label class="control-label">Nome</label>
                                <div class="controls">
                                    <input size="50" class="form-control" name="nome" type="text" placeholder="Nome" required="" value="<?php echo !empty($nome)?$nome: '';?>">
                                    <p></p>
                                    <?php if(!empty($nomeErro)): ?>
                                        <span class="help-inline"><?php echo $nomeErro;?></span>
                                    <?php endif;?>
                                </div>
                            </div>

                            <div class="control-group <?php echo !empty($dt_nascimentoErro)?'error ' : '';?>">
                                <label class="control-label">Data de Nascimento</label>
                                <div class="controls">
                                    <input size="50" class="form-control" name="dt_nascimento" type="date" placeholder="21/12/2001" required="" value="<?php echo !empty($dt_nascimento)?$dt_nascimento: '';?>">
                                    <p></p>
                                    <?php if(!empty($dt_nascimentoErro)): ?>
                                        <span class="help-inline"><?php echo $dt_nacimentoErro;?></span>
                                    <?php endif;?>
                                </div>
                            </div>

                            <div class="control-group <?php echo !empty($emailErro)?'error ': '';?>">
                                <label class="control-label">Email</label>
                                <div class="controls">
                                    <input size="40" class="form-control" name="email" type="text" placeholder="Email" required="" value="<?php echo !empty($email)?$email: '';?>">
                                    <p></p>
                                    <?php if(!empty($emailErro)): ?>
                                        <span class="help-inline"><?php echo $emailErro;?></span>
                                    <?php endif;?>
                                </div>
                            </div>

                            <div class="control-group <?php echo !empty($senhaErro)?'error ': '';?>">
                                <label class="control-label">Senha</label>
                                <div class="controls">
                                    <input size="40" class="form-control" name="senha" type="password" placeholder="Senha" required="" value="<?php echo !empty($senha)?$senha: '';?>">
                                    <p></p>
                                    <?php if(!empty($senhaErro)): ?>
                                        <span class="help-inline"><?php echo $senhaErro;?></span>
                                    <?php endif;?>
                                </div>
                            </div>

                            <div class="control-group <?php echo !empty($sexoErro)?'error ': '';?>">
                                <label class="control-label">Sexo</label>
                                
                                <div class="controls">
                                    <div class="form-check">
                                        <p class="form-check-label">
                                            <input class="form-check-input" type="radio" name="sexo" id="sexo" value="Masculino" <?php echo ($sexo=="Masculino" ) ? "checked" : null; ?>/> Masculino
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sexo" id="sexo" value="Feminino" <?php echo ($sexo=="Feminino" ) ? "checked" : null; ?>/> Feminino
                                        </div>
                                    </p>
                                    <?php if(!empty($sexoErro)): ?>
                                        <span class="help-inline"><?php echo $sexoErro;?></span>
                                    <?php endif;?>
                                </div>
                                <div class="form-actions">
                                    <br/>
                                    <label>Adicione imagens</label>

                                    
                                    <div class="input-group mb-3">
                                       
                                        <div class="input-group">
                                          <div class="custom-file">

                                            <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04"  id="imagens" name="imagens[]" multiple="multiple">
                                            <label class="custom-file-label" for="inputGroupFile04">Escolher Arquivo...</label>
                                        </div>
                                        <div class="input-group-append">
                                        </div>
                                    </div>

                                    <br>
                                    <br>


                                    
                                    <br>
                                    <button type="submit" class="btn btn-success">Adicionar</button>
                                    <a href="index.php" type="btn" class="btn btn-default">Voltar</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<footer>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <?=include('rodape.php');?>
</footer>
</body>

</html>

<?php
require_once 'banco.php';
if(!empty($_POST))
{
    
        //Acompanha os erros de validação
    $sexo = null;
    $id_userErro = null;
    $nomeErro = null;
    $dt_nascimentoErro = null;
    $emailErro = null;
    $sexoErro = null;
    $id_userErro = null;
    $senhaErro = null;
    $acesso = null;

       // $id_user = $_POST['id_user'];
    $nome = $_POST['nome'];
    $dt_nascimento = $_POST['dt_nascimento'];
    $email = $_POST['email'];
    $sexo = $_POST['sexo'];
    $senha = $_POST['senha'];
    $imagens = $_FILES['imagens'];

        //Validaçao dos campos:
    $validacao = true;
    if(empty($nome))
    {
        $nomeErro = 'Por favor digite o seu nome!';
        $validacao = false;
    }
        /*if(empty($id_user))
        {
            $id_userErro = 'Por favor digite o seu id!';
            $validacao = false;
        } */
        if(empty($dt_nascimento))
        {
            $dt_nascimentoErro = 'Por favor digite o número do dt_nascimento!';
            $validacao = false;
        }
        if(empty($email))
        {
            $emailErro = 'Por favor digite o endereço de email';
            $validacao = false;
        }
        elseif (!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            $emailErro = 'Por favor digite um endereço de email válido!';
            $validacao = false;
        }
        if(empty($sexo))
        {
            $sexoErro = 'Por favor digite o campo!';
            $validacao = false;
        }
        if(empty($senha))
        {
            $senhaErro = 'Senha incorreta!';
            $validacao = false;
        }
        echo

        $id_userErro.
        $nomeErro.
        $dt_nascimentoErro.
        $emailErro.
        $sexoErro.
        $id_userErro.
        $senhaErro;
        //Inserindo no Banco:
        if($validacao)
        {
            $pdo = Banco::conectar();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO usuario (nome, dt_nascimento, email, sexo, senha, tipo_user_id_tip) VALUES(?,?,?,?,?,1)";
            $q = $pdo->prepare($sql);
            $q->execute(array($nome,$dt_nascimento,$email,$sexo,$senha));
            $last_id = $pdo->lastInsertId();

            $target_dir = "imagens/";
            $count_img = 0;
            $uploaddir = $target_dir . "usuarios/". $last_id . "/";
            if (!is_dir($uploaddir)) {
                mkdir($uploaddir);
            }

            foreach ($imagens['name'] as $imagem) {
                $target_file = $uploaddir . $count_img."-".basename($imagem);

                move_uploaded_file($imagens["tmp_name"][$count_img], $target_file);
                $count_img = $count_img + 1;
            }

            Banco::desconectar();
            exit;
            header("Location: login.php");
        }
    }
    ?>

    <p></p>
    <br>
    <br>
    <br>
    