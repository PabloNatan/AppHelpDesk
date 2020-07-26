<?php

	session_start();

	/*
	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';
	//remover índices do array se sessão
	//unset() remover índices de qualquer array

	unset($_SESSION['x']); //para remover o índice apenas se existir
	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';

	//destruir a variável de sessão
	//session_destroy() //será destruída

	session_destroy();
	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';
	*/

	session_destroy();
	header('Location: index.php');
?>