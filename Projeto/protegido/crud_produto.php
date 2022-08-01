<?php

require '../protegido/model.php';
require '../protegido/controller.php';
require '../protegido/conexao.php';



if (isset($_GET['acao']) && $_GET['acao'] == 'inserir') {

		
	$produto = new Produto();
	$produto->__set('nome', $_POST['nome'] );
	$produto->__set('valor', $_POST['valor'] );
	$produto->__set('categoria_produto_idcategoria_produto', $_POST['categoria_produto_idcategoria_produto'] );
	$produto->__set('marca_idmarca', $_POST['marca_idmarca'] );

	$conexao = new Conexao();

	$produtoController = new ProdutoController($conexao, $produto);
	$produtoController->create();
	
	//header('Location: cadastro.php?msg=1');	
	echo "<pre>";
	print_r($produtoController);

echo "<br>";

}else if (isset($_GET['acao']) && $_GET['acao'] == 'recuperar') {
	
	$produto = new Produto();
	$conexao = new Conexao();

	$produtoController = new ProdutoController($conexao, $produto);
	$produto = $produtoController->select();

	if (empty($_GET['listar'])) {
		header('Location:cadastro.php?listar=produto&acao=recuperar');
	}
	
} else if(isset($_GET['acao']) && $_GET['acao'] == 'atualizar'){
		
	$produto = new Produto();
	$produto->__set('idproduto', $_POST['id']);
	$produto->__set('nome', $_POST['nome'] );
	$produto->__set('valor', $_POST['valor'] );
	$produto->__set('categoria_produto_idcategoria_produto', $_POST['categoria_produto_idcategoria_produto'] );
	$produto->__set('marca_idmarca', $_POST['marca_idmarca'] );
	
	$conexao = new Conexao();

	$produtoController = new ProdutoController($conexao, $produto);

	if($produtoController->update()){
		header('Location:cadastro.php?listar=produto&acao=recuperar&msg=2');
	}

	}else if(isset($_GET['acao']) && $_GET['acao'] == 'remover'){
		echo "string";
		$produto = new Produto();
		$produto->__set('idproduto', $_GET['id']);

		$conexao = new Conexao();

		$produto = new ProdutoController($conexao, $produto);
		$produtoController->delete();

		header('Location:cadastro.php?listar=produto&acao=recuperar&msg=3');
	}
?>