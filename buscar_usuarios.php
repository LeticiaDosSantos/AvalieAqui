<?php
session_start();
if(empty($_SESSION['nome'])){
    header("Location: not-found.php");
} else{
    include ("cabecalho_logado.php");
    
    ?>

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <title>Avalie Aqui - Usuários</title>
        <meta charset="utf-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/Bootstrap/bootstrap.min.css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <title>Avalie Aqui</title>
    </head>

    <body>             
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Data de Nascimento</th>
                    <th scope="col">E-mail</th>                            
                </tr>
            </thead>
            <tbody>
                <?php
                require_once 'banco.php';
                $pdo = Banco::conectar();
                $sql = 'SELECT * FROM usuario ORDER BY id_user ASC';

                foreach($pdo->query($sql)as $row)
                {
                    echo '<tr>';
                    echo '<th scope="row">'. $row['id_user'] . '</th>';
                    echo "<td>". $row['nome'] . '</td>';
                    echo "<td>". $row['sexo'] . '</td>';
                    echo "<td>". $row['dt_nascimento'] . '</td>';
                    echo "<td>". $row['email'] . '</td>';
                    echo "<td width=250>";

                    echo '<a class="btn btn-secondary" href="read_usuario.php?id_user='.$row['id_user'].'">Info</a>';
                    echo ' ';
                    echo '<a class="btn btn-light" href="update_usuario.php?id_user='.$row['id_user'].'">Editar</a>';
                    echo ' ';
                    echo '<a class="btn btn-dark" href="delete_usuario.php?id_user='.$row['id_user'].'">Excluir</a>';
                    echo '</td>';
                    echo '</tr>';
                }
                Banco::desconectar();
                ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>

<?php
}
include ("rodape.php");
?>
