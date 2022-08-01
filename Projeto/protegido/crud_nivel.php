<?php

require '../protegido/model.php';
require '../protegido/controller.php';
require '../protegido/conexao.php';

//$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;S

$id;

if (isset($_GET['acao']) && $_GET['acao'] == 'inserir') {

/*
	$nivel = new Nivel();

	$conexao = new Conexao();

	$nivelController = new NivelController($conexao, $nivel);
	$nivelController->create();

	$id = $nivelController->select_once();
		//header('Location: categoria_marca.php?msg=1');
	*/
} else if (isset($_GET['acao']) && $_GET['acao'] == 'recuperar') {
	
	$nivel = new Nivel();
	$conexao = new Conexao();

	$nivel->__set('idcategoria_de_cliente', $id);

	$nivelController = new NivelController($conexao, $nivel);
	$niveis = $nivelController->select();
	//$_SESSION['niveis'] = $niveis;
	
	echo "<pre>";
	print_r($niveis);
	echo "</pre>";

} else if(isset($_GET['acao']) && $_GET['acao'] == 'atualizar'){

	$nivel = new Nivel();
	$nivel->__set('idcategoria_de_cliente', $idnivel);
	$nivel->__set('nivel1', $nivel1);
	$nivel->__set('nivel2', $nivel2);
	$nivel->__set('nivel3', $nivel3);
	$nivel->__set('nivel4', $nivel4);
	$nivel->__set('nivel5', $nivel5);

	$conexao = new Conexao();

	$nivel = new NivelController($conexao, $nivel);

	if($categoriaController->update()){
		//header('Location:categoria_marca.php?listar=categoria&acao=recuperar&msg=2');
	}

}/* else if(isset($_GET['acao']) && $_GET['acao'] == 'remover'){
	echo "string";
	$categoria_produto = new Categoria_Produto();
	$categoria_produto->__set('idcategoria_produto', $_GET['id']);

	$conexao = new Conexao();

	$categoriaController = new Categoria_ProdutoController($conexao, $categoria_produto);
	$categoriaController->delete();

	
}*/



?>