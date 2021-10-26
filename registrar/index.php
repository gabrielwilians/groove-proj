<?php
    include('../login/config.php');
    if(isset($_POST['acao'])){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
          $nome = $_POST['nome'];
            $sobrenome = $_POST['sobrenome'];
              $contato = $_POST['contato'];
        $criptografada = password_hash($senha, PASSWORD_DEFAULT);

        if($email == '' || $senha == ''){
            echo 'Preencha o campo.';
        }else{
            $sql = $pdo->prepare("INSERT INTO tb_erp VALUES (null, ?, ?, ?, ?, ?)");
            $sql->execute([$email, $criptografada, $nome, $sobrenome, $contato]);
            header("Location: ../main.php");  die();
        }
    }
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<title>Goovel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Quick Register Form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
</head>
<body>
<div class="signupform">
<h1>Dê o primeiro passo</h1>
	<div class="container">

		<div class="agile_info">
			<div class="w3_info">
				<h2>Registre-se aqui</h2>
						<form action="#" method="post">
						<div class="left margin">
							<label>nome</label>
							<div class="input-group">
								<span><i class="fa fa-user" aria-hidden="true"></i></span>
								<input type="text" placeholder="Nome" name="nome" required="">
							</div>
						</div>
						<div class="left">
							<label>Sobrenome</label>
							<div class="input-group">
								<span><i class="fa fa-user" aria-hidden="true"></i></span>
								<input type="text" placeholder="Sobrenome" name="sobrenome" required="">
							</div>
						</div>
						<div class="left margin">
							<label>Email</label>
							<div class="input-group">
								<span><i class="fa fa-envelope" aria-hidden="true"></i></span>
								<input type="email" placeholder="Email" name="email" required="">
							</div>
						</div>
						<div class="left">
							<label>Número de telefone</label>
							<div class="input-group">
								<span><i class="fa fa-phone" aria-hidden="true"></i></span>
								<input type="text" placeholder="Contato" name="contato" required="">
							</div>
						</div>
						<div class="left margin">
							<label>Senha</label>
							<div class="input-group">
								<span><i class="fa fa-lock" aria-hidden="true"></i></span>
								<input type="Password" placeholder="Senha" name="senha" required="">
							</div>
						</div>
						<div class="left">
							<label>Repita sua senha</label>
							<div class="input-group">
								<span><i class="fa fa-lock" aria-hidden="true"></i></span>
								<input type="Password" placeholder="Confirme sua senha" required="">
							</div>
						</div>
						<div class="clear"></div>
							<input type="checkbox" value="remember-me" /> <h4> eu aceito os termos e condições</h4>
							<button class="btn btn-danger btn-block" type="submit" name="acao">Registrar <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button >
					</form>
			</div>
			<div class="w3l_form">
				<div class="left_grid_info">
					<h3>Você já está registrado?</h3>
					<p>Se você já esteve aqui antes, já pode usar os recursos disponíveis.</p>
					<a href="../login" class="btn">Login <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
				</div>
			</div>
			<div class="clear"></div>
			</div>

		</div>
		<div class="footer">

 <p>&copy; 2021 todos os direitos reservados | Design by <a href="https://google.com/" target="blank">Gabriel</a></p>
 </div>
	</div>
	</body>
</html>
