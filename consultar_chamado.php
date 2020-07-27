<!DOCTYPE html>

<?php require_once 'validador_acesso.php';


	//chamados 
	$chamados = array();
	//abrir o arquivo.hd
	$arquivo = fopen('arquivo.hd', 'r');

	//enquanto houver registros (linhas) a serem recuperados
	while(!feof($arquivo)) { //testa pelo fim do arquivo
		$registro = fgets($arquivo);
		$chamados[] = $registro;
	}
	fclose($arquivo);
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
			
			<section class="caixa-input chamado ">
						
				<div class="head-login"><span class="text-menu-chamado">Consulta de chamado</span></div>

				<div class="center">
				<div class="chamados">

				<?php foreach ($chamados as $value) { 

					if ($_SESSION['perfil_id'] == 2){
						//só vamos exibir o chamado, se ele foi criado pelo usuário
						if ($_SESSION['idUsuario'] != $value[0]) {
							continue;
						}
					}

					if ($value == false){
						break;
					}
					$value = explode('#', $value);


				?>

					<div class="iten-chamado">
						<h2><?= $value[1] ?></h2>
						<h3><?= $value[2] ?></h3>
						<p><?= $value[3] ?></p>
					</div>	

				<?php }  ?>

						
				</div>
				
				<a href="home.php" class="btn btn-voltar-chamado btn-chamados" style="display: block;">Voltar</a>

				</div>
			</section>
			
		</main>
	</body>
</html>