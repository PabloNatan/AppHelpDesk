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
			<a href="#">
				<h1>
					App Help Desk
				</h1>
			</a>
		</header>

		<main>
			
			<section class="caixa-input chamado">
						
				<div class="head-login"><span class="text-menu-chamado">Abertura de chamado</span></div>

					
				<form>
					<label for="titulo">Título</label>
					<input class='input' type="text" name="titulo" placeholder="Título">

					<label >Categoria</label>
					<select class="input place">
						<option>Criação Usuário</option>
						<option>Impressora</option>
						<option>Hardware</option>
						<option>Software</option>
						<option>Rede</option>
					</select>

					<label for="descricao">Descrição</label>
					<textarea id="descricao" placeholder="Digite aqui.." class="input"></textarea>

					<div class="flex-buttons">
						<button class="btn btn-voltar-chamado">Voltar</button>
						<button class="btn btn-entrar-chamado">Entrar</button>
					</div>
						
				</form>
				
			</section>	
		</main>
	</body>
</html>