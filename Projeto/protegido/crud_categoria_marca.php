<?php

require '../protegido/model.php';
require '../protegido/controller.php';
require '../protegido/conexao.php';

//$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;


if (isset($_GET['acao']) && $_GET['acao'] == 'inserir') {

if (isset($_POST['categoria']) && $_POST['categoria'] != '') {
		
		$categoria = new Categoria_Produto();
		$categoria->__set('categoria', $_POST['categoria'] );

		$conexao = new Conexao();

		$categoriaController = new Categoria_ProdutoController($conexao, $categoria);
		$categoriaController->create();


		header('Location: categoria_marca.php?msg=1');

	
}else {
	echo "Você precisa inserir uma nova categoria";
}

echo "<br>";

if (isset($_POST['marca'])) {
	$marca = $_POST['marca'];
	echo "Marca: "."$marca";
}

} else if (isset($_GET['acao']) && $_GET['acao'] == 'recuperar') {
	
	$categoria_produto = new Categoria_Produto();
	$conexao = new Conexao();

	$categoriaController = new Categoria_ProdutoController($conexao, $categoria_produto);
	$categorias = $categoriaController->select();

	/*echo "<pre>";
	print_r($categorias);
	echo "</pre>";
	*/
	if (empty($_GET['listar'])) {
		header('Location:categoria_marca.php?listar=categoria&acao=recuperar');
	}
	
} else if(isset($_GET['acao']) && $_GET['acao'] == 'atualizar'){
		
		$categoria_produto = new Categoria_Produto();
		$categoria_produto->__set('idcategoria_produto', $_POST['id']);
		$categoria_produto->__set('categoria', $_POST['categoria']);

		$conexao = new Conexao();

		$categoriaController = new Categoria_ProdutoController($conexao, $categoria_produto);

		if($categoriaController->update()){
			header('Location:categoria_marca.php?listar=categoria&acao=recuperar&msg=2');
		}

	} else if(isset($_GET['acao']) && $_GET['acao'] == 'remover'){
		echo "string";
		$categoria_produto = new Categoria_Produto();
		$categoria_produto->__set('idcategoria_produto', $_GET['id']);

		$conexao = new Conexao();

		$categoriaController = new Categoria_ProdutoController($conexao, $categoria_produto);
		$categoriaController->delete();

		header('Location:categoria_marca.php?listar=categoria&acao=recuperar&msg=3');
	}



?>