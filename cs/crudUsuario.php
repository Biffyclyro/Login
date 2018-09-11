<?php 
	include 'conexaoBD.php';
	function cadastrarUsuario($nome, $senha){
		conectar();
		query("INSERT INTO usuario(nome, senha) VALUES('$nome', '$senha')");
		fechar();
	}

	function buscarUsuario($nome){
		conectar();
		$resultado=query("SELECT * FROM USUARIO WHERE USUARIO.NOME='$nome'");
		fechar();
		return $resultado;
	}


?>