<?php

		include('config.php');
		if(isset($_POST['acao'])){
				$email = $_POST['email'];
				$senha = $_POST['senha'];

				$sql = $pdo->prepare("SELECT * FROM tb_erp WHERE email = ?");
				$sql->execute([$email]);
  //onde declara os cookies
				if($sql->rowCount() == 1){
						$info = $sql->fetch();
						if(password_verify($senha, $info['senha'])){
								$_SESSION['login'] = true;
								$_SESSION['id'] = $info['id'];
								$_SESSION['email'] = $info['email'];
									$_SESSION['nome'] = $info['nome'];
										$_SESSION['sobrenome'] = $info['sobrenome'];
								header("Location: ../main.php");
								die();
						}else{
								//Erro
								echo '<h3>usuário ou senha incorretos</h3>';
						}
				}else{
						//Erro
						echo 'email não encontrado';
				}
		}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>goovel - entrar</title>
	<!-- Meta tags -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- //Meta tags -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /><!-- Style-CSS -->
	<link href="css/font-awesome.css" rel="stylesheet"><!-- font-awesome-icons -->
</head>

<body>
	<section class="w3l-form-36">
		<div class="form-36-mian section-gap">
			<div class="wrapper">
				<div class="form-inner-cont">
					<h3>Goovel </h3>


					<form action="" method="post" class="signin-form">
						<div class="form-input">
							<span class="fa fa-envelope-o" aria-hidden="true"></span> <input type="email" name="email"
								placeholder="email" required />
						</div>
						<div class="form-input">
							<span class="fa fa-key" aria-hidden="true"></span> <input type="password" name="senha" placeholder="senha"
								required />
						</div>
						<div class="login-remember d-grid">
							<label class="check-remaind">
								<input type="checkbox">
								<span class="checkmark"></span>
								<p class="remember">lembrar-me</p>
							</label>

<!-- entrar -->
            	<button type="submit"   name="acao" class="btn theme-button">entrar</button>
						</div>
						<div class="new-signup">
							<a href="#reload" class="signuplink">esqueceu sua senha?</a>
						</div>
					</form>
					<div class="social-icons">
						<p class="continue"><span>ou</span></p>
						<div class="social-login">
							<a href="#facebook">
								<div class="facebook">
									<span class="fa fa-facebook" aria-hidden="true"></span>

								</div>
							</a>
							<a href="#google">
								<div class="google">
									<span class="fa fa-google-plus" aria-hidden="true"></span>
								</div>
							</a>
						</div>
					</div>
					<p class="signup">Ainda não possui uma conta? <a href="../registrar" class="signuplink">registre-se agora</a></p>
				</div>

				<!-- copyright -->
				<div class="copy-right">
					<p>© 2021 Todos os direitos reservados| Design by <a href="http:/instagram.com/"
							target="_blank">gabrielwillian</a></p>
				</div>
				<!-- //copyright -->
			</div>
		</div>
	</section>
</body>

</html>
