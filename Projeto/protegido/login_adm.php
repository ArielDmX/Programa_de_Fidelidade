<?php

require '../protegido/model.php';
require '../protegido/controller.php';
require '../protegido/conexao.php';
session_destroy();
session_start();
//require '../protegido/login_banco.php';

//$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;S
$log =  $_POST['login'];
$pass = $_POST['senha'];

var_dump($log);
echo "<br>";
var_dump($pass);


$user = login($log, $pass);

$_SESSION['useradm'] = $user;
//$user = login("hp@hogwarts.wiz","123456");	
echo "<pre>";
print_r($user);
echo "</pre>";

$id = $user[0]->idfuncionario;
$nome = $user[0]->nome;

//echo "$id";
// echo "$nome";

///login
/*

$query = "SELECT * FROM cliente WHERE email = '$log' AND senha = '$pass' LIMIT 1";
$result = mysqli_query($conne, $query);
$resultado = mysqli_fetch_assoc($result);

echo "<pre>";
var_dump($resultado);
echo "</pre>";
*/
///
/*
$ponto = new Ponto();
$ponto->__set('cliente_idcliente', $id);

$conexao = new Conexao();

$pontoController = new PontoController($conexao, $ponto);
$pontos = $pontoController->select_cliente();
$_SESSION['pontos'] = $pontos;
$acumulado = pontos_acumulados($id);
$_SESSION['acumulado'] = $acumulado;
unset($pontoController);
unset($ponto);
unset($pontos);

$nivel = new Nivel();
$conexao = new Conexao();

$nivel->__set('idcategoria_de_cliente', $id);

$nivelController = new NivelController($conexao, $nivel);
$niveis = $nivelController->select();
	//$_SESSION['niveis'] = $niveis;

$_SESSION['niveis'] = $niveis;

$i = 1;
$teste = $niveis[0]->nivel1;
$_SESSION['nivel'] = $teste;
if ($teste == 3000) {     
  $teste = $niveis[0]->nivel2; $i = $i+1;
  $nivel = $teste;
}elseif ($teste == 3000) {
  $teste = $niveis[0]->nivel3; $i = $i+1;
  $nivel = $teste;
}elseif ($teste == 3000) {
  $teste = $niveis[0]->nivel4; $i = $i+1;
  $nivel = $teste;
}elseif ($teste == 3000) {
  $teste = $$niveis[0]->nivel5; $i = $i+1;
  $nivel = $teste;
}
$_SESSION['nivel'] = $teste;
$_SESSION['i'] = $i;
*/
if ($id != null) {
	
		header('Location:settings.php');
	
}else{
	header('Location:adm.php?msg=1');
	session_destroy();
}




/*
function pontos_acumulados($id){

	//$id = 2;
	$ponto = new Ponto();
	$ponto->__set('cliente_idcliente', $id);

	$conexao = new Conexao();

	$pontoController = new PontoController($conexao, $ponto);
	$pontos = $pontoController->select_once();
	$ponto = $pontos[0]->ponto_acumulado;

	return $ponto;
}
*/
/*	//credito(111111);
function credito($cod){
	$compra = new Compra();
	$compra->__set('cod_compra', $cod);

	$conexao = new Conexao();

	$compraController = new CompraController($conexao, $compra);
	$compras = $compraController->select_once();
	echo "<pre>";
	print_r($compras);
	echo "</pre>";
	
}
*/

function login($login, $password){

	
	$funcionario = new Funcionario();
	
	$funcionario->__set('login',$login);
	$funcionario->__set('senha',md5($password));

	echo "<pre>";
	print_r($funcionario);
	echo "</pre>";

	$conexao = new Conexao();

	$funcionarioController = new FuncionarioController($conexao, $funcionario); //o meu b.o.
	$logged = $funcionarioController->select_login();

	echo "<pre>";
	print_r($logged);
	echo "</pre>";
/*
	echo "<pre>";
	print_r($logged);
	echo "</pre>";
*/

	return $logged;
/*


	$query = "SELECT * FROM cliente WHERE email = :email AND senha = :senha LIMIT 1";
	$result = mysqli_query($conne, $query);
	$resultado = mysqli_fetch_assoc($result);
	
	echo "<pre>";
	print_r($resultado);
	echo "</pre>";

*/
}




?>

