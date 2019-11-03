<?php

    include "cabecalho.php";
    require 'banco.php';
  
    $id = null;
    if(!empty($_GET['id_user']))
    {
        $id = $_REQUEST['id_user'];
    }

    if(null==$id)
    {
        header("Location: index.php");
    }
    else
    {
       $pdo = Banco::conectar();
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql = "SELECT * FROM usuario where id_user =".$_SESSION['id_user'];
       $q = $pdo->prepare($sql);
       $q->execute(array($id));
       $data = $q->fetch(PDO::FETCH_ASSOC);
       Banco::desconectar();
    }
          
?>

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    </head>

    <body>

<div class="card bg-dark text-white">
  <img src="img/perfil.png" class="card-img" alt="...">
  <div class="card-img-overlay">
    <center>
    <h1 style="margin-top: 8%" class="card-title">Perfil</h1>
    <p class="card-text">Veja aqui todas as suas informações</p>
</center>
  </div>
</div>




        <?php
                $img_dir = "imagens/usuarios/". $id . "/";
                if (is_dir($img_dir)) {
                    $image = glob($img_dir . "*")[0];
                    $index = 3;
                       
                          $index++;
                          echo '<div>

                            <img src="'.$image.'" 
                                style=" width: 150px;
                                height: 150px;
                                background: gray;
                                border: 3px solid gray;
                                border-radius: 50%;
                                float: left;
                                margin-top: 5%;
                                margin-left: 5%"></img>


                          </div>';
                            
                        
                } else {
                    echo "<img src='img/sem-img.png' style=' width: 150px;
                                height: 150px;
                                background: yellow;
                                border: 3px solid gray;
                                border-radius: 50%;
                                float: left;
                                margin-top: 8%;
                                margin-left: 5%'></img>";
                }
                ?>
 
         <nav class="nav justify-content-center"> 
          
        </nav><br>
        
 <div class="card-body">
    <p class="card-text" style="margin-left: 17%; margin-top: 5%"><h1><strong style="margin-left: 2%"><?php echo $_SESSION['nome'];?></strong></h1></p>
   <p  style="margin-left: 17%"><?php echo $data['email'];?></p>
                       
  </div>
</div></center>


                    <div class="form-actions">
                    </div>
                  </div>
                  </div>
                </div>
                <br>
            </div>
        </div>
<p></p>

<br>

<div class="card-deck" style="margin-left: 25%; width: 50%">

  <div class="card" style="margin-right: 1%;">
 <div>
    <img src="img/calendario.png" style="width: 10%">
     <?php echo $data['dt_nascimento'];?>
  </div><div>
    <img src="img/se.png" style="width: 10%">
     <?php echo $data['sexo'];?>
  </div>
    
  </div>

 

</div>
<br>



<br>
<br>
                        <a style="margin-left: 10%" href="index.php" type="btn" class="btn btn-light">Voltar</a>
                        <?php
                        echo '<a class="btn btn-warning" href="update_usuario.php?id_user='.$_GET['id_user'].'">Editar</a>';
                        ?>
        </div></div><br>


        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="assets/js/bootstrap.min.js"></script>
    </body>

    </html>
<?php
    include "rodape.php";
?>