<?php
		
		session_start();

		echo '<pre>';
		print_r($_POST);
		echo '</pre>';

		$arquivo = fopen('arquivo.hd', 'a'); //parametro 'a' abre o documento apenas para escrita


		// Na primeira solução somamos todas as informações em uma string de forma hard code fazendo uma tratativa que se por caso o usuário inserir serquila durate o texto ele sera tratado para se tornar hífen
		$titulo = str_replace('#', '-', $_POST['titulo']);
		$categoria = str_replace('#', '-', $_POST['categoria']);
		$descricao = str_replace('#', '-', $_POST['descricao']);

		$texto = $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

		echo "$texto" . '<br />';

		/*Na segunda solução vamos usar o metodo implode que transforma todos os itend de uma array em uma string.
		implode('fator que irá separar os pedaços', os pedaços que serão reunidos ou seja o array)
		
		$_POST['titulo'] = str_replace('#', '-', $_POST['titulo']);
		$_POST['categoria']  = str_replace('#', '-', $_POST['categoria']);
		$_POST['descricao']  = str_replace('#', '-', $_POST['descricao']);
		$text = implode('#', $_POST);
		echo $text;
		*/

		//Função fwrite seleciona o arquivo no primeiro parametro e no segundo o texto e como fopen foi usado a aplicação sabe que tem que ser escrito no final do arquivo

		fwrite($arquivo, $texto);

		fclose($arquivo);

		header('Location: abrir_chamado.php')
?>