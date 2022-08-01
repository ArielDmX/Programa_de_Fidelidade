<?php
	session_start();
	require '../protegido/conexao.php';
	require '../protegido/controller.php';
	require '../protegido/model.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Contato</title>
	<head>
	<body>
		<?php
		$arquivo = 'Relatórios.xls';
		
		$html = '';
		$html .= '<table border="1">';
		$html .= '<tr>';
		$html .= '<td colspan="7">Relatório de clientes</tr>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>ID</b></td>';
		$html .= '<td><b>Nome</b></td>';
		$html .= '<td><b>E-mail</b></td>';
		$html .= '<td><b>CPF</b></td>';
		$html .= '<td><b>Telefone</b></td>';
		$html .= '<td><b>Data de nascimento</b></td>';
		$html .= '<td><b>Recebe notificações</b></td>';
		$html .= '</tr>';

		$cliente = new Cliente;
		$conexao = new Conexao;
		$clienteController = new ClienteController($conexao, $cliente);
		$clientes = $clienteController->select_consulta();
		
		foreach ($clientes as $key => $value) {
			$newsletter;
			$newsletter = $value['flag_newsletter'] == "A" ? "Sim" : "Não";
			$html .= '<tr>';
			$html .= '<td>'.$value["idcliente"].'</td>';
			$html .= '<td>'.$value["nome"].'</td>';
			$html .= '<td>'.$value["email"].'</td>';
			$html .= '<td>'.$value["cpf"].'</td>';
			$html .= '<td>'.$value["telefone"].'</td>';
			$html .= '<td>'.$value["data_nasc"].'</td>';
			$html .= '<td>'.$newsletter .'</td>';
			$html .= '</tr>';
			;
		}
		header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		header ("Content-Description: PHP Generated Data" );
		echo $html;
		exit; ?>
	</body>
</html>