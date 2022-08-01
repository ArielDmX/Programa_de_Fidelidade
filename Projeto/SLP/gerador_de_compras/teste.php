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

/*while ($dado = mysqli_fetch_assoc($result)) {
	echo $dado['nome'] . "<br>";
}*/
$aleatorio = rand(1,20);
$i = 0;



?>

<table border="1">
	<thead>
		<td>Cód de compras</td>
		<td>Id do produto</td>
		<td>Quantidade</td>
	</thead>
	<?php
	while ($i <= $aleatorio) {
		$produto = rand(1,20);
		$quantidade = rand(1, 5);
		$query = "INSERT INTO compra (cod_compra, produto_idproduto, quantidade) VALUES ('$codigofinal','$produto','$quantidade')";
		$i++;
		?>
		<tbody>

			<td><?//= "$codigofinal";?></td>
			<td><?//= "$produto"; ?></td>
			<td><?//= "$quantidade"; ?></td>	

		</tbody>
	</table>
	<?php echo $query."<br>";

	if(mysqli_query($conn, $query)){
		echo "foi<br>";
	}else{
		echo "Problema<br>";}} ?>
	</body>
	</html>

