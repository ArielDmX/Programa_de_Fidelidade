<?php
session_start();
require '../protegido/model.php';
require '../protegido/controller.php';
require '../protegido/conexao.php';

$id = $_SESSION['user'][0]->idcliente;
$cod = $_POST['cod'];
if (isset($_GET['acao']) && $_GET['acao'] == 'inserir') {

	$cod = geracupom();
	$cupom = new Cupom();
	$cupom->__set('cod_cupom', $cod );
	//$cupom->__set('dthr_compra', $_POST['dthr_compra'] );
	$cupom->__set('cliente_idcliente', $id );
	//$cupom->__set('flag_status', $_POST['flag_status'] );
	$cupom->__set('descricao', $_POST['descricao'] );
	$cupom->__set('valor', $_POST['valor'] );

	$conexao = new Conexao();

	$cupomController = new CupomController($conexao, $cupom);
	$cupomController->create();
	
	//header('Location: cadastro.php?msg=1');	
	echo "<pre>";
	//print_r($cupomController);

	echo "<br>";

}else if (isset($_GET['acao']) && $_GET['acao'] == 'recuperar') {
	
	$cupom = new Cupom();
	$conexao = new Conexao();
	$cupom->__set('Cliente_idcliente', $id);
	$cupomController = new CupomController($conexao, $cupom);
	$cupom = $cupomController->select();

	$_SESSION['cupom'] = $cupom;

	if (empty($_GET['listar'])) {
		header('Location:historico_trocas.php?listar=cupom&acao=recuperar');
	}
	
}else if (isset($_GET['acao']) && $_GET['acao'] == 'recuperar2') {
	
	$cupom = new Cupom();
	$conexao = new Conexao();

	$cupomController = new CupomController($conexao, $cupom);
	$cupom = $cupomController->select_all();

	if (empty($_GET['listar'])) {
		header('Location:cadastro.php?listar=cupom&acao=recuperar2');
	}
	
} else if (isset($_GET['acao']) && $_GET['acao'] == 'consulta') {
	
	$cupom = new Cupom();

	$cupom->__set('cod_cupom', $cod);
	$conexao = new Conexao();

	$cupomController = new CupomController($conexao, $cupom);

	$cupons = $cupomController->consulta();

	$cliente = new Cliente();
	$cliente->__set('idcliente', $cupons[0]->Cliente_idcliente);

	$clientecontroller = new ClienteController($conexao, $cliente);

	$clientes = $clientecontroller->consulta();

	$_SESSION['nomecliente'] = $clientes[0]->nome;

	$_SESSION['cupons'] = $cupons;
	if (empty($_GET['listar'])) {
		header('Location:settings.php?listar=cupom&acao=consulta');
	}
	}
	/*else if(isset($_GET['acao']) && $_GET['acao'] == 'atualizar'){
		
	$cupom = new Cupom();
	$cupom->__set('idcupom', $_POST['id']);
	$cupom->__set('cod_Cupom', $_POST['cod_Cupom'] );
	$cupom->__set('dthr_compra', $_POST['dthr_compra'] );
	$cupom->__set('Cliente_idcliente', $_POST['Cliente_idcliente'] );
	$cupom->__set('flag_status', $_POST['flag_status'] );
	$cupom->__set('descricao', $_POST['descricao'] );
	$cupom->__set('valor', $_POST['valor'] );
	$conexao = new Conexao();

	$cupomController = new CupomController($conexao, $cupom);

	if($cupomController->update()){
		header('Location:cadastro.php?listar=cupom&acao=recuperar&msg=2');
	}

	}else if(isset($_GET['acao']) && $_GET['acao'] == 'remover'){
		echo "string";
		$cupom = new Cupom();
		$cupom->__set('idcupom', $_GET['id']);

		$conexao = new Conexao();

		$cupom = new CupomController($conexao, $cupom);
		$cupomController->delete();

		header('Location:cadastro.php?listar=cupom&acao=recuperar&msg=3');
	}*/

	function geracupom(){
		$basic = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
		$senha= "";
		for($count= 0; 10 > $count; $count++){
			$senha.= $basic[rand(0, strlen($basic) - 1)];
		}
		return $senha;
	}
	?>