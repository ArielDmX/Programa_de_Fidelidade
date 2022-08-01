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
		$html .= '<td colspan="7">Relatório de trocas</tr>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>ID</b></td>';
		$html .= '<td><b>Nome</b></td>';
		$html .= '<td><b>Login</b></td>';
		$html .= '<td><b>Id do Cliente</b></td>';
		$html .= '<td><b>Situação do cupom</b></td>';
		$html .= '<td><b>Descrição</b></td>';
		$html .= '<td><b>Valor em pontos</b></td>';
		$html .= '</tr>';

		$cupom = new Cupom;
		$conexao = new Conexao;
		$cupomController = new CupomController($conexao, $cupom);
		$cupons = $cupomController->select_consulta();
		
		foreach ($cupons as $key => $value) {
			$atualstatus;
			$atualstatus = $value['flag_status'] == "A" ? "Ativo" : "Desativado";
			$html .= '<tr>';
			$html .= '<td>'.$value["idCupom"].'</td>';
			$html .= '<td>'.$value["cod_Cupom"].'</td>';
			$html .= '<td>'.$value["dthr_compra"].'</td>';
			$html .= '<td>'.$value["Cliente_idcliente"].'</td>';
			$html .= '<td>'.$atualstatus .'</td>';
			$html .= '<td>'.$value["descricao"].'</td>';
			$html .= '<td>'.$value["valor"].'</td>';
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