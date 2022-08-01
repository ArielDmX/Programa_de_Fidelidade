<?php

require '../protegido/model.php';
require '../protegido/controller.php';
require '../protegido/conexao.php';



if (isset($_GET['acao']) && $_GET['acao'] == 'inserir') {

		
	$endereco = new Endereco();
	$endereco->__set('UF', $_POST['uf'] );
	$endereco->__set('cidade', $_POST['cidade'] );
	$endereco->__set('bairro', $_POST['bairro'] );
	$endereco->__set('logradouro', $_POST['rua'] );
	$endereco->__set('numero', $_POST['numero'] );
	$endereco->__set('complemento', $_POST['complemento'] );
	$endereco->__set('cep', $_POST['cep'] );

	$conexao = new Conexao();

	$enderecoController = new EnderecoController($conexao, $endereco);
	$enderecoController->create();
	
	//header('Location: cadastro.php?msg=1');	
	echo "<pre>";
	print_r($enderecoController);

echo "<br>";

}else if (isset($_GET['acao']) && $_GET['acao'] == 'recuperar') {
	
	$endereco = new Endereco();
	$conexao = new Conexao();

	$enderecoController = new EnderecoController($conexao, $endereco);
	$endereco = $enderecoController->select();

	if (empty($_GET['listar'])) {
		header('Location:cadastro.php?listar=endereco&acao=recuperar');
	}
	
} else if(isset($_GET['acao']) && $_GET['acao'] == 'atualizar'){
		
	$endereco = new Endereco();
	$endereco->__set('idendereco', $_POST['id']);
	$endereco->__set('UF', $_POST['UF'] );
	$endereco->__set('cidade', $_POST['cidade'] );
	$endereco->__set('bairro', $_POST['bairro'] );
	$endereco->__set('logradouro', $_POST['logradouro'] );
	$endereco->__set('numero', $_POST['numero'] );
	$endereco->__set('complemento', $_POST['complemento'] );
	$endereco->__set('cep', $_POST['cep'] );
	$conexao = new Conexao();

	$endereçoController = new EnderecoController($conexao, $endereco);

	if($enderecoController->update()){
		header('Location:cadastro.php?listar=endereco&acao=recuperar&msg=2');
	}

	}else if(isset($_GET['acao']) && $_GET['acao'] == 'remover'){
		echo "string";
		$endereco = new Endereco();
		$endereco->__set('idendereco', $_GET['id']);

		$conexao = new Conexao();

		$endereco = new EnderecoController($conexao, $endereco);
		$enderecoController->delete();

		header('Location:cadastro.php?listar=cadastro&acao=recuperar&msg=3');
	}
?>