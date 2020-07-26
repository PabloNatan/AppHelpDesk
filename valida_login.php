<?php
	
	session_start();



	//variavel que verifica se a autenticacao foi realizada
	$usuario_autenticado = false;

	//usuarios do sistema
	$usuarios_app = array(
		array('email' => 'adm@teste.com.br', 'password' => '123456', 'usuario' => 'Rafael'),
		array('email' => 'user@teste.com.br', 'password' => 'abcd', 'usuario' => 'Mikail')
	);

	foreach ($usuarios_app as $key => $value) {

		if($_POST['email'] == $value['email'] && $_POST['password'] == $value['password']) {

			$usuario_autenticado = true;
		}
	}


	if($usuario_autenticado){
		echo 'Usuário autenticado';
		$_SESSION['autenticado'] = 'SIM';
	}else {
		$_SESSION['autenticado'] = 'NÃO';
		header('Location: index.php?login=erro');
	}
	/*

	echo '<pre>';
		print_r($usuarios_app);
	echo '</pre>';
	/*
	echo '<pre>';
	print_r($_GET);
	echo '</pre>';

	echo $_GET['email'] . '<br />';
	echo $_GET['password'];
	

	echo '<pre>';
	print_r($_POST);
	echo '</pre>';

	echo $_POST['email'] . '<br />';
	echo $_POST['password'];
	*/
?>