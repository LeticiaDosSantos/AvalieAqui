<?php

    include "cabecalho.php";

    require 'banco.php';

    $id_user = null;
    if ( !empty($_GET['id_user']))
            {
        $id_user = $_REQUEST['id_user'];
            }

    if ( null==$id_user ){
        header("Location: index.php");
    }

    if ( !empty($_POST)){

        $nomeErro = null;
        $sexoErro = null;
        $dt_nascimentoErro = null;
        $emailErro = null;

        $nome = $_POST['nome'];
        $sexo = $_POST['sexo'];
        $dt_nascimento = $_POST['dt_nascimento'];
        $email = $_POST['email'];
        
        //Validação
        $validacao = true;
        if (empty($nome))
                {
                    $nomeErro = 'Por favor digite o nome!';
                    $validacao = false;
                }

        if (empty($sexo))
                {
                    $sexoErro = 'Por favor selecione seu sexo!';
                    $validacao = false;
        }
                if (empty($dt_nascimento))
                {
                    $dt_nascimentoErro = 'Por favor digite o horrário de funcionamento!';
                    $validacao = false;
        }

                if ( !filter_var($email,FILTER_VALIDATE_EMAIL) )
                {
                    $emailErro = 'Por favor digite seu email!';
                    $validacao = false;
        }


        // update data

        if ($validacao)
                {
                    $pdo = Banco::conectar();
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql = "UPDATE usuario set nome = ?, sexo = ?, dt_nascimento = ?, email = ? WHERE id_user = ?";
                    $q = $pdo->prepare($sql);
                    $q->execute(array($nome,$sexo,$dt_nascimento,$email,$id_user));
                    Banco::desconectar();
                    header("Location: buscar_usuarios.php");
        }
    }
        else
            {
        $pdo = Banco::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM usuario where id_user = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id_user));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $nome = $data['nome'];
        $sexo = $data['sexo'];
        $dt_nascimento = $data['dt_nascimento'];
        $email = $data['email'];
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
          <a class="nav-link" style="color: black; font-size: 30px; font-family:all;">Atualizar Informações</a>
        </nav><br>
        <div id="linha" style="width: 70%; border-bottom: 1.2px solid #000000; position: center; margin-left: 15%;
}"> </div>   <br><br> </center>
            <div class="span10 offset1">
                            <div class="card">
                                <div class="card-body">
                <form class="form-horizontal" action="./update_usuario.php?id_user=<?php echo $id_user?>" method="post">


                    <div class="control-group <?php echo !empty($nomeErro)?'error':'';?>">
                        <label class="control-label">Nome</label>
                        <div class="controls">
                            <input name="nome" class="form-control" size="50" type="text" placeholder="Nome" value="<?php echo !empty($nome)?$nome:'';?>">
                            <?php if (!empty($nomeErro)): ?>
                                <span class="help-inline"><?php echo $nomeErro;?></span>
                                <?php endif; ?>
                        </div>
                    </div>


                    <div class="control-group <?php echo !empty($sexoErro)?'error':'';?>">
                        <label class="control-label">Sexo</label>
                        <div class="controls">
                            <input name="sexo" class="form-control" size="50" type="text" value="<?php echo !empty($sexo)?$sexo:'';?>">
                            <?php if (!empty($sexoErro)): ?>
                                <span class="help-inline"><?php echo $sexoErro;?></span>
                                <?php endif; ?>
                        </div>
                    </div>

                    <div class="control-group <?php echo !empty($dt_nascimentoErro)?'error':'';?>">
                        <label class="control-label">Data de Nascimento</label>
                        <div class="controls">
                            <input name="dt_nascimento" class="form-control" size="30" type="text" placeholder="Telefone" value="<?php echo !empty($dt_nascimento)?$dt_nascimento:'';?>">
                            <?php if (!empty($dt_nascimentoErro)): ?>
                                <span class="help-inline"><?php echo $dt_nascimentoErro;?></span>
                                <?php endif; ?>
                        </div>
                    </div>
    
                    <div class="control-group <?php echo !empty($emailErro)?'error':'';?>">
                        <label class="control-label">Horário de Email</label>
                        <div class="controls">
                            <input name="email" class="form-control" size="30" type="text" placeholder="Digite aqui" value="<?php echo !empty($email)?$email:'';?>">
                            <?php if (!empty($emailErro)): ?>
                                <span class="help-inline"><?php echo $emailErro;?></span>
                                <?php endif; ?>
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