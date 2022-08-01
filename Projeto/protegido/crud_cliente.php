<?php

require '../protegido/model.php';
require '../protegido/controller.php';
require '../protegido/conexao.php';

//$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;S

if (isset($_GET['acao']) && $_GET['acao'] == 'inserir') {
	if (testacpf($_POST['cpf'])){
		echo "CPF já cadastrado";
		header('Location:cadastro.php?oops=1');
	}
	elseif(testasenha($_POST['senha'], $_POST['confirma'])){
		$nivel = new Nivel();
		$conexao = new Conexao();
		$nivelController = new NivelController($conexao, $nivel);
		$nivelController->create();
		$id = $nivelController->select_once();

		unset($nivel);
		unset($nivelController);

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

		unset($endereco);
		unset($enderecoController);

		$endereco = new Endereco();
		$conexao = new Conexao();
		$enderecoController = new EnderecoController($conexao, $endereco);
		$endereco2 = $enderecoController -> select_once();

		$endereco3 = $endereco2[0] -> idendereco;

		$data = explode("/", $_POST['data-nascimento']);
		$datasql = "$data[2]" . '-' . "$data[1]" . '-' . "$data[0]";
		
		$cliente = new Cliente();
		$cliente->__set('nome', $_POST['nome'] );
		$cliente->__set('email', $_POST['email'] );
		$cliente->__set('senha', md5($_POST['senha']) );
		$cliente->__set('telefone', $_POST['telefone']);
		$cliente->__set('cpf', $_POST['cpf'] );
		$cliente->__set('data_nasc', $datasql );
		$cliente->__set('endereco_idendereco', $endereco3 );
		$cliente->__set('flag_newsletter', $_POST['newsletter']);
		$cliente->__set('categoria_de_cliente_idcategoria_de_cliente', $id[0]->idcategoria_de_cliente);

		$conexao = new Conexao();

		$clienteController = new ClienteController($conexao, $cliente);
		$clienteController->create();

	header('Location:index.php?msg=6');

	}else{
		echo "Senha e confirmação não são iguais";
		
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$telefone = $_POST['telefone'];
		$cpf = $_POST['cpf'];
		$data = $_POST['data-nascimento'];
		$flag_newsletter = $_POST['newsletter'];
		$uf = $_POST['uf'];
		$cidade = $_POST['cidade'];
		$bairro = $_POST['bairro'];
		$rua = $_POST['rua'];
		$numero = $_POST['numero'];
		$complemento = $_POST['complemento'];
		$cep = $_POST['cep'];
		if(empty($_GET['oops'])){header('Location:cadastro.php?oops=2');}
	}
}


else if (isset($_GET['acao']) && $_GET['acao'] == 'recuperar') {
	
	$cliente = new Cliente();
	$conexao = new Conexao();

	$clienteController = new ClienteController($conexao, $cliente);
	$clientes = $clienteController->select();

	echo "<pre>";
	print_r($clientes);
	echo "</pre>";
	
	if (empty($_GET['listar'])) {
		header('Location:cadastro-cliente.php?listar=cliente&acao=recuperar');
	}
	
} else if(isset($_GET['acao']) && $_GET['acao'] == 'atualizar'){

	$data_nasc = explode("/", $_POST['data_nasc']);
	$datasql = "$data_nasc[2]" . '-' . "$data_nasc[1]" . '-' . "$data_nasc[0]";
	$cliente = new Cliente();
	$cliente->__set('idcliente', $_POST['id']);
	$cliente->__set('nome', $_POST['nome'] );
	$cliente->__set('email', $_POST['email'] );
	$cliente->__set('telefone', $_POST['telefone'] );
	$cliente->__set('data_nasc', $datasql );


	$conexao = new Conexao();

	$clienteController = new ClienteController($conexao, $cliente);

	if($clienteController->update()){
		header('Location:cadastro_cliente.php?listar=cliente&acao=recuperar&msg=2');
	}

} else if(isset($_GET['acao']) && $_GET['acao'] == 'remover'){
	echo "string";
	$cliente = new Cliente();
	$cliente->__set('idcliente', $_GET['id']);

	$conexao = new Conexao();

	$clienteController = new ClienteController($conexao, $cliente);
	$clienteController->delete();

	header('Location:cadastro_cliente.php?listar=cliente&acao=recuperar&msg=3');
}

function testacpf($temp)
{
	$cliente = new Cliente();

	$cliente->__set('cpf', $temp);

	$conexao = new Conexao();

	$clienteController = new ClienteController($conexao, $cliente);
	$clientes = $clienteController->select_cpf();
	print_r($clientes);
	if (isset($clientes[0])) {
		return true;
	}else{
		return false;
	}
}

function testasenha($temps, $tempc)
{
	if ($temps == $tempc) {
		return true;
	}else{
		return false;
	}
}

?>