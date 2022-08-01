<!DOCTYPE html>
<html>

<?php 
include('login.php');
$codigo = rand(0,9999);
$valor = rand(0,9999);
$agora = time();
$codigofinal = $codigo . $agora;
?>

<head>
	<title>Cupom gerado</title>
</head>
<body>

<a href="index.php"><input type="button" placeholder="voltar" value="Voltar"></a>


<h2>O código gerado é: <?php echo "$codigo"; ?></h2><br>
<h2>E agora é <?php echo $agora; ?></h2>
<h1>O codigo final é <?php echo "$codigofinal"; ?></h1>

<?php 
$query = "SELECT * FROM produto";
$result = mysqli_query($conn, $query);
$resultado = mysqli_fetch_assoc($result);

while ($dado = mysqli_fetch_assoc($result)) {
	echo $dado['nome'] . "<br>";
}



?>

</body>
</html>

