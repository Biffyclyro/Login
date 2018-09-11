<?php 
	
	if(isset($_COOKIE['usuario'])){
		$nome=$_COOKIE['usuario'];

		echo $nome;
	}

?>