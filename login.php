<?php
include ("cabecalho_login.php");
require_once ("banco.php");

if(isset($_POST['login'])) {
	$errMsg = '';

		// Get data from FORM
	$email = null;
	$senha = null;

	$a = 'SELECT * FROM usuario';

	$email = $_POST['email'];
	$senha = $_POST['senha'];

	if($email == '')
		$errMsg = 'Usuário e/ou senha não correspondem';
	if($senha == '')
		$errMsg = 'Usuário e/ou senha não correspondem';

	if($errMsg == '') {
		try {
			$stmt = $connect->prepare('SELECT id_user, nome, email, senha FROM usuario WHERE email = :email');
			$stmt->execute(array(
				':email' => $email
			));
			$data = $stmt->fetch(PDO::FETCH_ASSOC);

			if($data == false){
				$errMsg = "User $email not found.";
			}
			else {
				if($senha == $data['senha']) {
					session_start();
					$_SESSION['nome'] = $data['nome'];
					$_SESSION['email'] = $data['email'];
					$_SESSION['senha'] = $data['senha'];
					$_SESSION['id_user'] = $data['id_user'];
					header('Location: index.php');
					exit;
				}
				else
					$errMsg = '<center><div style="width: 20%"><div class="alert alert-danger" role="alert">
  Usuário e senha não correspondem!
</div></div></center>';
			}
		}
		catch(PDOException $e) {
			$errMsg = $e->getMessage();
		}
	}
}
?>

<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8"/>
	<title>Sistema Login</title>
	<link rel="stylesheet" type="text/css" href="assets/css/login.css" />

	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/Bootstrap/bootstrap.min.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
</head>

<body>
	<br>
	<?php
	if(isset($errMsg)){
		echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
	}
	?>
	<form name="form_pesquisa" id="form_pesquisa" method="post" action="" style="margin-left: 13.50%;opacity: 0.91;position: center;">
		<div class="card" style="width: 25%;" style="border-bottom: 50%">
			<div class="form-group">
				<div id="login-box">
					
					<nav class="nav justify-content-center"> 
						<a class="nav-link" style="color: black; font-size: 30px; font-family:all; margin-left: 1000%;">Login</a>
					</nav>


					<!--<H2 style="color: black">Login</H2>-->
					

					<div id="login-box-name">Email</div><br>
					<div id="login-box-field">

						<input class="form-control" type="text" name="email" placeholder="example@email.com" class="form-login" value="<?php if(isset($_POST['email'])) echo $_POST['email'] ?>" autocomplete="off" class="box" style="margin-left: 10%"/><br /><br /></div>

						<div id="login-box-name" style="cursor: default;">Senha</div><br>
						<div id="login-box-field">

							<input class="form-control" type="password" placeholder="********" class="form-login" name="senha" value="<?php if(isset($_POST['senha'])) echo $_POST['senha'] ?>" autocomplete="off" class="box" style="margin-left: 10%;"/><br/><br />
							<center>

								<input type="submit" style="margin-left: 17%" class="btn btn-primary" name='login' value="Login" class='submit'/><br /></div></div><input type="hidden" name="acao" value="logar"/><br>

								<a href="create_usuario.php"><h5><span class="badge badge-secondary" style="margin-left: 27%">Cadastre-se Aqui</span></h5></a>

								<br></div>
							</center>

						</div>
					]</div>
				</div>
			</div>
		</form>

		<?=include ("rodape.php");?>
	</div>
</body>