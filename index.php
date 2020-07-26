<!DOCTYPE html>

<html>
	<head>
		<title>App Help Desk</title>
		<link rel="icon" href='img/logo.png'>
		<meta charset="utf-8">
		<link rel='stylesheet' href='css/style.css'>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
	</head>

	<body>
		<header>
			<a href="home.php">
				<h1>
					App Help Desk
				</h1>
			</a>

			
		</header>

		<main>
			<section class="caixa-input">
					
				<div class="head-login"><span class="caixa-text-logo">Login</span></div>

				<form action="http://localhost/AppHelpDesk/valida_login.php" method="post">

					<input class='input' type="email" name="email" placeholder="E-mail">
					<input class='input' type="password" name="password" placeholder="Senha">

					<?php if(isset($_GET['login']) && $_GET['login'] == 'erro'){ ?>

						<p class="login">Usuário ou senha inválido(s)</p>
						
						
					<?php } ?>				

					<?php if(isset($_GET['login']) && $_GET['login'] == 'erro2'){ ?>

						<p class="login">Favor faça login para poder acessar a página</p>
						
						
					<?php } ?>

					<button class=" btn btn-enviar">Entrar</button>
				</form>
				
			</section>
		</main>
	</body>
</html>