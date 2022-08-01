<?php
session_start();
require '../protegido/model.php';
require '../protegido/controller.php';
require '../protegido/conexao.php';

$empresa_cnpj = $_SESSION['useradm'][0]->empresa_cnpj;
$id = $_SESSION['useradm'][0]->idfuncionario;
if (isset($_GET['acao']) && $_GET['acao'] == 'inserir') {

		
	$config = new Config();
	$config->__set('qtde_niveis', 5 );
	$config->__set('desc_niveis', "" );
	$config->__set('multiplicador', $_POST['multiplicador'] );
	$config->__set('funcionario_idfuncionario', $id );
	$config->__set('empresa_cnpj', $empresa_cnpj );

	$conexao = new Conexao();

	$configController = new ConfigController($conexao, $config);
	$configController->create();
	
	//header('Location: cadastro.php?msg=1');	

	echo "<script>alert('Configuração atualizada com sucesso');</script>";
	echo "<script>window.location.href= 'config.php';</script>";
echo "<br>";

}else if (isset($_GET['acao']) && $_GET['acao'] == 'recuperar') {
	
	$config = new Config();
	$conexao = new Conexao();

	$configController = new ConfigController($conexao, $config);
	$config = $configController->select();

	if (empty($_GET['listar'])) {
		header('Location:cadastro.php?listar=config&acao=recuperar');
	}
	
} else if(isset($_GET['acao']) && $_GET['acao'] == 'atualizar'){
		
	$config = new Config();
	$config->__set('idconfig', $_POST['id']);
	$config->__set('qtde_niveis', $_POST['qtde_niveis'] );
	$config->__set('desc_niveis', $_POST['desc_niveis'] );
	$config->__set('multiplicador', $_POST['multiplicador'] );
	$config->__set('dthr_alteracao', $_POST['dthr_alteracao'] );
	$config->__set('funcionario_idfuncionario', $_POST['funcionario_idfuncionario'] );
	$config->__set('empresa_cnpj', $_POST['empresa_cnpj'] );
	$conexao = new Conexao();

	$configController = new ConfigController($conexao, $config);

	if($configController->update()){
		header('Location:cadastro.php?listar=config&acao=recuperar&msg=2');
	}

	}else if(isset($_GET['acao']) && $_GET['acao'] == 'remover'){
		echo "string";
		$config = new Config();
		$config->__set('idconfig', $_GET['id']);

		$conexao = new Conexao();

		$config = new ConfigController($conexao, $config);
		$configController->delete();

		header('Location:cadastro.php?listar=config&acao=recuperar&msg=3');
	}

		$config = new Config();

		$conexao = new Conexao();

		$configController = new configController($conexao, $config);

		$configuracao = $configController->select_once();

		//$_SESSION['configuracao'] = $configuracao;


?>