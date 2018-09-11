<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
</head>
<body>
	<div>
		<h1>Acessar</h1>
		<form method="post" action="controleUsuario.php">
			<label for="nome">Usuário:</label>
			<input type="text" name="nome" id="nome">
			<label for="senha">Senha:</label>
			<input type="password" name="senha" id="senha">
			<input type="submit" name="opcao" value="Entrar!">			
		</form>
		<br/><a href="cadastrarUsuario.php">Cadastrar Usuário!</a>
	</div>

</body>
</html>