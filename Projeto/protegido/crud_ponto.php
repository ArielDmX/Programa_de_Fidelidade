<?php

require '../protegido/model.php';
require '../protegido/controller.php';
require '../protegido/conexao.php';

//$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;S
session_start();

$id = $_SESSION['user'][0]->idcliente;
$idcliente = $_SESSION['user'][0]->idcliente;

if (isset($_GET['acao']) && $_GET['acao'] == 'inserir') {
$c_ou_d = $_POST['c_ou_d'];//$_POST['c_ou_d']; 
$pontos = $_POST['valor'];
$descricao = $_POST['descricao'];
$pontos_acumulados;
if ($c_ou_d == 'c') {

	$pontos = credito($_POST['cod'] , $idcliente);
	echo "<br><br>";
	var_dump($pontos);
	//echo pontos_acumulados($idcliente);
	$pontos_acumulados = pontos_acumulados($idcliente) + $pontos;
	//echo $pontos_acumulados;
}else{

	$pontos_acumulados = pontos_acumulados($idcliente) - $pontos;
	$cod_cupom = geracupom();
	
}
if ($pontos != 0) {

	$ponto = new Ponto();
	$ponto->__set('ponto_acumulado', $pontos_acumulados);
	$ponto->__set('ponto_transitado', $pontos);
	$ponto->__set('credito_ou_debito', $c_ou_d );
	$ponto->__set('cliente_idcliente', $idcliente );

	$conexao = new Conexao();

	$pontoController = new PontoController($conexao, $ponto);
	echo "<pre>";
	print_r($pontoController);
	echo "</pre>";
	$pontoController->create();
	if ($c_ou_d == "c"){
		header('Location: action_atualiza.php?listar=pontos&acao=recuperar2&msg=1');
	}else{
		$cupom = new Cupom();
		$cupom->__set('cod_cupom', $cod_cupom);
		$cupom->__set('cliente_idcliente', $idcliente);
		$cupom->__set('descricao', $descricao);
		$cupom->__set('valor', $pontos);
		$conexao = new Conexao();
		echo "<pre>";
		print_r($cupom);
		echo "</pre>";
		$cupomController = new CupomController($conexao, $cupom);
		$cupomController->create();


///////////////////////////////////
		$nivel1 = 0;
		$nivel2 = 0;
		$nivel3 = 0;
		$nivel4 = 0;
		$nivel5 = 0;

		$niveis = $_SESSION['niveis'];
		$i = 1;
		$teste = $niveis[0]->nivel1;
		$teste += $pontos;
		$nivel1 = $teste;
		if ($teste >= 3000) {     
			$teste = $niveis[0]->nivel2; $i = $i+1;
			$nivel = $teste;
			$nivel1 = 3000;
			$nivel2 = $teste;
		}elseif ($teste >= 3000) {
			$teste = $niveis[0]->nivel3; $i = $i+1;
			$nivel = $teste;
			$nivel2 = 3000;
			$nivel3 = $teste;
		}elseif ($teste >= 3000) {
			
			$teste = $niveis[0]->nivel4; $i = $i+1;
			$nivel = $teste;
			$nivel3 = 3000;
			$nivel4 = $teste;
		}elseif ($teste >= 3000) {
			$nivel3 = $teste;
			$teste = $niveis[0]->nivel5; $i = $i+1;
			$nivel4 = 3000;
			$nivel5 = $teste;
		}
		$_SESSION['nivel'] = $teste;
		$_SESSION['i'] = $i;
		////////////////////////////////////
		$nivel = new Nivel();
		$nivel->__set('idcategoria_de_cliente', $idcliente);
		$nivel->__set('nivel1', $nivel1);
		$nivel->__set('nivel2', $nivel2);
		$nivel->__set('nivel3', $nivel3);
		$nivel->__set('nivel4', $nivel4);
		$nivel->__set('nivel5', $nivel5);

		$conexao = new Conexao();

		$nivelController = new NivelController($conexao, $nivel);
		$nivelController->update();

		header('Location: action_atualiza.php?listar=pontos&acao=recuperar2&msg=3');
	}
}else{
	header('Location: visao_geral.php?listar=pontos&acao=recuperar2&msg=2');
}




} /*else if (isset($_GET['acao']) && $_GET['acao'] == 'recuperar') {
	
	$ponto = new Ponto();
	$conexao = new Conexao();

	$pontoController = new PontoController($conexao, $ponto);
	$pontos = $pontoController->select();

	echo "<pre>";
	print_r($pontos);
	echo "</pre>";
	
	if (empty($_GET['listar'])) {
		//header('Location:pontos.php?listar=categoria&acao=recuperar');
	}
	
}*/
elseif (isset($_GET['acao']) && $_GET['acao'] == 'consulta') {
	$cliente = new Cliente();
	$cliente->__set('cpf', $_POST['cpf']);

	$conexao = new Conexao();
	$clienteController = new ClienteController($conexao, $cliente);

	$id = $clienteController->select_cpf();

	$ponto = new Ponto();
	$ponto->__set('cliente_idcliente', $id[0]->idcliente);
	$_SESSION['nomecliente'] = $id[0]->nome;
	$conexao = new Conexao();

	$pontoController = new PontoController($conexao, $ponto);
	$pontos = $pontoController->select_cliente();
	$acumulado = pontos_acumulados($id);
	$_SESSION['pontos'] = $pontos;
	if (empty($_GET['listar']) and $id != null) {
		header('Location:settings.php?listar=pontos&acao=consulta');
	}else{
		header('Location:settings.php?msg=5');
	}
}
elseif (isset($_GET['acao']) && $_GET['acao'] == 'recuperar') {
	$ponto = new Ponto();
	$ponto->__set('cliente_idcliente', $id);

	$conexao = new Conexao();

	$pontoController = new PontoController($conexao, $ponto);
	$pontos = $pontoController->select_cliente();
	$acumulado = pontos_acumulados($id);
	if (empty($_GET['listar'])) {
		header('Location:pontos.php?listar=pontos&acao=recuperar2');
	}
}
else if(isset($_GET['acao']) && $_GET['acao'] == 'atualizar'){

	$categoria_produto = new Categoria_Produto();
	$categoria_produto->__set('idcategoria_produto', $_POST['id']);
	$categoria_produto->__set('categoria', $_POST['categoria']);

	$conexao = new Conexao();

	$categoriaController = new Categoria_ProdutoController($conexao, $categoria_produto);

	if($categoriaController->update()){
		header('Location:pontos.php?listar=categoria&acao=recuperar2&msg=2');
	}

} /*else if(isset($_GET['acao']) && $_GET['acao'] == 'remover'){
	echo "string";
	$categoria_produto = new Categoria_Produto();
	$categoria_produto->__set('idcategoria_produto', $_GET['id']);

	$conexao = new Conexao();

	$categoriaController = new Categoria_ProdutoController($conexao, $categoria_produto);
	$categoriaController->delete();

	header('Location:pontos.php?listar=categoria&acao=recuperar2&msg=3');
}*/
elseif (isset($_GET['acao']) && $_GET['acao'] == 'recuperar2') {

	$ponto = new Ponto();
	$ponto->__set('cliente_idcliente', $id);

	$conexao = new Conexao();

	$pontoController = new PontoController($conexao, $ponto);
	$pontos = $pontoController->select_cliente();
	$acumulado = pontos_acumulados($id);
	if (empty($_GET['listar'])) {
		header('Location:pontos.php?listar=pontos&acao=recuperar2');
	}
	
	/*echo "<pre>";
	print_r($pontos);
	echo "</pre>";*/
}

function pontos_acumulados($id){

	//$id = 2;
	$ponto = new Ponto();
	$ponto->__set('cliente_idcliente', $id);

	$conexao = new Conexao();

	$pontoController = new PontoController($conexao, $ponto);
	$pontos = $pontoController->select_once();
	$ponto = $pontos[0]->ponto_acumulado;
	//echo "<pre>";
	//print_r($ponto);
	//echo "</pre>";
	return $ponto;
}

	//credito(97281590423705, $idcliente);
function credito($cod, $idcliente){
	$compra = new Compra();
	$compra->__set('cod_compra', $cod);

	$conexao = new Conexao();

	$compraController = new CompraController($conexao, $compra);
	$compras = $compraController->select_once();
	$valor_total =0.0;
	if ($compras[0]->Cliente_idcliente == null) {

		$compra->__set('Cliente_idcliente', $idcliente);
		$compras2 = $compraController->update();

		foreach ($compras as $key => $compra) {
			$valor_total += $compra->quantidade*$compra->valor;
		}

		$config = new Config();

		$conexao = new Conexao();

		$configController = new configController($conexao, $config);

		$configuracao = $configController->select_once();
		/*echo "<pre>";
		print_r($configuracao);
		echo "</pre>";
	*/
		$pontoscalculados =  intval($valor_total*$configuracao[0]->multiplicador);
	//		echo $pontoscalculados;
		return $pontoscalculados;
	}else{
		//echo "Este cupom já foi resgatado";
		
		return 0;
	}
}

function geracupom(){
	$basic = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
	$senha= "";
	for($count= 0; 12 > $count; $count++){
		$senha.= $basic[rand(0, strlen($basic) - 1)];
	}
	return $senha;
}


?>

