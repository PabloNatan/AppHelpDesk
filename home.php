<!DOCTYPE html>

<?php require_once 'validador_acesso.php'?>
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
			<a href="#">
				<h1>
					App Help Desk
				</h1>
			</a>

			<a href="logoff.php" class="text-destaque">SAIR</a>
		</header>

		<main>
			<section class="caixa-input home">
					
				<div class="head-login"><span class="text-menu-home">Menu</span></div>

				<div class="menus">
					<div class="menu-iten">
						<a href="abrir_chamado.php">
							<img src="img/formulario_abrir_chamado.png" width="100%">
						</a>
					</div>

					<div class="menu-iten">
						<a href="consultar_chamado.php">
							
							<img src="img/formulario_consultar_chamado.png" width="100%">
						</a>
						
					</div>
				</div>
				
			</section>
		</main>
	</body>
</html>