<!DOCTYPE html>


<?php require_once 'validador_acesso.php'
		
?>

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

			<a href="logoff.php" class="text-destaque">SAIR</a>
		</header>

		<main>
			
			<section class="caixa-input chamado">
						
				<div class="head-login"><span class="text-menu-chamado">Abertura de chamado</span></div>

					
				<form method="POST" action="registra_chamado.php" id='form'>
					<label for="titulo">Título</label>
					<input class='input' type="text" name="titulo" placeholder="Título">

					<label  for="categoria">Categoria</label>
					<select class="input place" name="categoria" id="categoria">
						<option>Criação Usuário</option>
						<option>Impressora</option>
						<option>Hardware</option>
						<option>Software</option>
						<option>Rede</option>
					</select>

					<label for="descricao">Descrição</label>
					<textarea id="descricao" placeholder="Digite aqui.." class="input" name="descricao"></textarea>

					<div class="flex-buttons">
						<a href="home.php" class="btn btn-voltar-chamado">Voltar</a>
						<button class="btn btn-entrar-chamado" id='suc'>Entrar</button>
					</div>
						
				</form>
				
				
			</section>

		</main>
	</body>
	<script src="js/app.js"></script>
</html>