<?php
	include ("cabecalho.php");
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
	<br>
		<article>
			<form name="form_pesquisa" id="form_pesquisa" method="post" action="" style="margin-left: 15%;opacity: 0.9;">
				 <div class="card" style="width: 25%;" style="border-bottom: 50%">
				 	 <div class="form-group">
						<div id="login-box">

					<!--<H2 style="color: black">Login</H2>-->
									
					<br/>
					<br/>

					<div id="login-box-name" >Email</div><br>
						<div id="login-box-field">
							<input name="email" class="form-login" title="Username" value="" size="30"  placeholder="  example@email.com" style="border-radius: 0.3rem;" />
						</div>

						<div id="login-box-name">Senha</div><br>
							<div id="login-box-field">
								<input name="senha" type="password" class="form-login" title="Senha" value="" size="30"  placeholder="  ********"  style="border-radius: 0.3rem;"/>
							</div>
							<br/>
						</div>
					</div>
					<br>
					<button type="submit" value="" class="btn btn-primary" style="width: 27%; margin-left: 36%;" >Login</button>
					<input type="hidden" name="acao" value="logar"/><br>	
      				   <a href="create.php"><h5><span class="badge badge-secondary" style="margin-left: 27%">Cadastre-se Aqui</span></h5></a>
      				   <br>
				</div>
			</form>
		</article>
		  <p>
          </div>
    </p>

</body>

</html>

<?php
$action = isset($_POST['acao']) ? trim($_POST['acao']) : '';
	if(isset($action) && $action != ""){ 
		
		switch($action){
			case 'logar':
				//requerimos nossa classe de autenticação passando os valores dos inputs como parâmetros
				require_once('class/Autentica.class.php');
				//instancio a classse para podermos usar o método nela contida
				$Autentica = new Autentica();
				//setamos 
				$Autentica->email	= $_POST['email'];
				$Autentica->senha	= $_POST['senha'];
				//chamamos nosso método						
				if($Autentica->Validar_Usuario()){
				   echo  "<script type='text/javascript'>
							location.href='logado.php'
						</script>";
				  }else{
				   echo  "<script type='text/javascript'>
							alert('ATEN\u00c7\u00c4O, Login ou Senha inv\u00e1lidos...');location.href='index.php'
						</script>";
				  }
			break;
		}	
	}
?>

<br>
<br>
<br>
<div>
	<?=include ("rodape.php");?>
</div>