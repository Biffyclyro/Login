<?php 
	session_start();

	$_SESSION['nome'] = 'Fulano da silva';
	$_SESSION['senha'] = '1234a';

	//unset($_SESSION['nome']);
	//session_destroy();

?>