<?php

require '../protegido/model.php';
require '../protegido/controller.php';
require '../protegido/conexao.php';



if (isset($_GET['acao']) && $_GET['acao'] == 'inserir') {

		
	$marca = new Marca();
	$marca->__set('idmarca', $_POST['id']);
	$marca->__set('nome_marca', $_POST['nome_marca'] );

	$conexao = new Conexao();

	$marcaController = new MarcaController($conexao, $marca);
	$marcaController->create();

	//header('Location: cadastro.php?msg=1');	
	echo "<pre>";
	print_r($marcaController);

echo "<br>";

}else if (isset($_GET['acao']) && $_GET['acao'] == 'recuperar') {
	
	$marca = new Marca();
	$conexao = new Conexao();

	$marcaController = new MarcaController($conexao, $marca);
	$marca = $marcaController->select();

	if (empty($_GET['listar'])) {
		header('Location:cadastro.php?listar=marca&acao=recuperar');
	}
	
} else if(isset($_GET['acao']) && $_GET['acao'] == 'atualizar'){
		
	$marca = new Marca();
	$marca->__set('idmarca', $_POST['id']);
	$marca->__set('nome_marca', $_POST['nome_marca'] );
	$conexao = new Conexao();

	$marcaController = new MarcaController($conexao, $marca);

	if($marcaController->update()){
		header('Location:cadastro.php?listar=marca&acao=recuperar&msg=2');
	}

	}else if(isset($_GET['acao']) && $_GET['acao'] == 'remover'){
		echo "string";
		$marca = new Marca();
		$marca->__set('idmarca', $_GET['id']);

		$conexao = new Conexao();

		$marca = new MarcaController($conexao, $marca);
		$marcaController->delete();

		header('Location:cadastro.php?listar=marca&acao=recuperar&msg=3');
	}
?>