<?php 
	session_start();

	if(isset($_SESSION['nome']) && isset($_SESSION['senha'])){
		echo 'Oi ', $_SESSION['nome'], ' <br/> ', 'senha: ', $_SESSION['senha'];
	}

	


?>