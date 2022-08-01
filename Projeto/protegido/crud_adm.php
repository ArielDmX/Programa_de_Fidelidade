<?php

require '../protegido/model.php';
require '../protegido/controller.php';
require '../protegido/conexao.php';



if (isset($_GET['acao']) && $_GET['acao'] == 'inserir') {

	if (testasenha($_POST['senha'], $_POST['confirma'])) {
		if (testalogin($_POST['login'])) {
			echo "<script>alert('Login já existente');</script>";
			echo "<script>window.history.back();</script>";
		}else{
			$funcionario = new Funcionario();
			$funcionario->__set('nome', $_POST['nome'] );
			$funcionario->__set('login', $_POST['login'] );
			$funcionario->__set('senha', md5($_POST['senha']) );
			$funcionario->__set('empresa_cnpj', $_POST['empresa_cnpj'] );

			$conexao = new Conexao();

			$funcionarioController = new FuncionarioController($conexao, $funcionario);
			$funcionarioController->create();

			echo "<script>alert('Cadastro realizado com sucesso');</script>";
			echo "<script>window.history.back();</script>";
		}
	}else{
		echo "<script>alert('As senhas não coincidem! Verifique as senhas novamente');</script>";
		echo "<script>window.history.back();</script>";
		//header('Location:cadastro_adm.php');
	}



}else if (isset($_GET['acao']) && $_GET['acao'] == 'recuperar') {
	
	$funcionario = new Funcionario();
	$conexao = new Conexao();

	$funcionarioController = new FuncionarioController($conexao, $funcionario);
	$funcionario = $funcionarioController->select();

	if (empty($_GET['listar'])) {
		header('Location:cadastro.php?listar=funcionario&acao=recuperar');
	}
	
} else if(isset($_GET['acao']) && $_GET['acao'] == 'atualizar'){

	$funcionario->__set('idfuncionario', $_POST['id']);
	$funcionario->__set('nome', $_POST['nome'] );
	$funcionario->__set('login', $_POST['login'] );
	$funcionario->__set('senha', $_POST['senha'] );
	$funcionario->__set('empresa_cnpj', $_POST['empresa_cnpj'] );
	$funcionario->__set('status', $_POST['status'] );
	$conexao = new Conexao();

	$endereçoController = new FuncionarioController($conexao, $funcionario);

	if($funcionarioController->update()){
		header('Location:cadastro.php?listar=funcionario&acao=recuperar&msg=2');
	}

}else if(isset($_GET['acao']) && $_GET['acao'] == 'remover'){
	echo "string";
	$funcionario = new Funcionario();
	$funcionario->__set('idfuncionario', $_GET['id']);

	$conexao = new Conexao();

	$funcionario = newFuncionarioController($conexao, $funcionario);
	$funcionarioController->delete();

	header('Location:cadastro.php?listar=cadastro&acao=recuperar&msg=3');
}

function testasenha($temps, $tempc)
{
	if ($temps == $tempc) {
		return true;
	}else{
		return false;
	}
}

function testalogin($temp)
{
	$funcionario = new Funcionario();

	$funcionario->__set('login', $temp);
	$conexao = new Conexao();

	$funcionarioController = new FuncionarioController($conexao, $funcionario);
	$funcionarios = $funcionarioController->select_test();
	
	if (isset($funcionarios[0])) {
		return true;
	}else{
		return false;
	}
}
?>