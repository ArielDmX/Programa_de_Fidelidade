<!DOCTYPE html>
<html>
<head>
	<title>Cliente</title>
</head>
<body>
	<form method="get">
		<p>idcliente:<input type="textbox" name=""></p>
		<p>Nome:<input type="textbox" name=""></p>
		<p>Email:<input type="textbox" name=""></p>
		<p>CPF:<input type="textbox" name=""></p>
		<p>Telefone:<input type="textbox" name=""></p>
		<p>Data de nascimento:<input type="textbox" name=""></p>
		<a href="form.php?do=pesquise"><input type="button" value="Pesquisar"></a>
		<input type="button" value="Inserir">
		</form>

<?php
if (isset($_GET['do']) && $_GET['do'] == 'pesquise'){
	//include('Produto.php');
	//session_start();
	//$_SESSION['query'] = "SELECT * FROM Cliente WHERE cpf ='$cpf' "
	var_dump($_GET);
}
?>
</body>
</html>