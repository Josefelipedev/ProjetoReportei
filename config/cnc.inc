<?php
		//cria a conexao mysqli_connect('localizacao BD', 'usuario de acesso', 'senha', 'banco de dados')
		$conexao = mysqli_connect('main_users.mysql.dbaas.com.br', 'main_users', 'Ze94750286@', 'main_users');

		//ajusta o charset de comunicação entre a aplicação e o banco de dados
		mysqli_set_charset($conexao, 'utf8');

		//verifica a conexão
		if ($conexao->connect_error) {
		    die("Falha ao realizar a conexão: " . $conexao->connect_error);
} 

?>