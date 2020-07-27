<?php
	
	session_start();



	//variavel que verifica se a autenticacao foi realizada
	$usuario_autenticado = false;
	$usuario_ID = null;
	$usuario_perfil_id = null;


	$perfis = array(1 => 'Adiministrativo', 2 => 'Usuario');

	//usuarios do sistema
	$usuarios_app = array(
		array('id' => 1, 'email' => 'adm@teste.com.br', 'password' => '1234', 'perfil_id' => 1),
		array('id' => 2, 'email' => 'user@teste.com.br', 'password' => '1234', 'perfil_id' => 1),
		array('id' => 3, 'email' => 'jose@teste.com.br', 'password' => '1234', 'perfil_id' => 2),
		array('id' => 4, 'email' => 'maria@teste.com.br', 'password' => '1234', 'perfil_id' => 2)
	);

	foreach ($usuarios_app as $key => $value) {

		if($_POST['email'] == $value['email'] && $_POST['password'] == $value['password']) {

			$usuario_autenticado = true;
			$usuario_ID = $value['id'];
			$usuario_perfil_id = $value['perfil_id'];
		}
	}


	if($usuario_autenticado){
		echo 'Usuário autenticado';
		$_SESSION['autenticado'] = 'SIM';
		$_SESSION['idUsuario'] = $usuario_ID;
		$_SESSION['pefil_id'] = $usuario_perfil_id;
		header('Location: home.php');
	}else {
		$_SESSION['autenticado'] = 'NÃO';
		header('Location: index.php?login=erro');
	}

?>