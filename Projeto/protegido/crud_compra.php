<?php

require '../protegido/model.php';
require '../protegido/controller.php';
require '../protegido/conexao.php';



if (isset($_GET['acao']) && $_GET['acao'] == 'inserir') {

		
	$compra = new Compra();
	$compra->__set('cod_compra', $_POST['cod_compra'] );
	$compra->__set('produto_idproduto', $_POST['produto_idproduto'] );
	$compra->__set('quantidade', $_POST['quantidade'] );
	$compra->__set('Cliente_idcliente', $_POST['Cliente_idcliente'] );
	$compra->__set('dthr_compra', $_POST['dthr_compra'] );

	$conexao = new Conexao();

	$compraController = new CompraController($conexao, $compra);
	$compraController->create();
	
	//header('Location: cadastro.php?msg=1');	
	echo "<pre>";
	print_r($compraController);

echo "<br>";

}else if (isset($_GET['acao']) && $_GET['acao'] == 'recuperar') {
	
	$compra = new Compra();
	$conexao = new Conexao();

	$compraController = new CompraController($conexao, $compra);
	$compra = $compraController->select();

	if (empty($_GET['listar'])) {
		header('Location:cadastro.php?listar=compra&acao=recuperar');
	}
	
} else if(isset($_GET['acao']) && $_GET['acao'] == 'atualizar'){
		
	$compra = new Compra();
	$compra->__set('idcompra', $_POST['id']);
	$compra->__set('cod_compra', $_POST['cod_compra'] );
	$compra->__set('produto_idproduto', $_POST['produto_idproduto'] );
	$compra->__set('quantidade', $_POST['quantidade'] );
	$compra->__set('Cliente_idcliente', $_POST['Cliente_idcliente'] );
	$compra->__set('dthr_compra', $_POST['dthr_compra'] );
	$conexao = new Conexao();

	$compraController = new CompraController($conexao, $compra);

	if($compraController->update()){
		header('Location:cadastro.php?listar=compra&acao=recuperar&msg=2');
	}

	}else if(isset($_GET['acao']) && $_GET['acao'] == 'remover'){
		echo "string";
		$compra = new Compra();
		$compra->__set('idcompra', $_GET['id']);

		$conexao = new Conexao();

		$compra = new CompraController($conexao, $compra);
		$ecompraController->delete();

		header('Location:cadastro.php?listar=compra&acao=recuperar&msg=3');
	}
?>compra