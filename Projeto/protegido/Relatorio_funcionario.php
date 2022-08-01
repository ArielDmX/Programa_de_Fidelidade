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
		$html .= '<td colspan="5">Relatório de Funcionarios</tr>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>ID</b></td>';
		$html .= '<td><b>Nome</b></td>';
		$html .= '<td><b>Login</b></td>';
		$html .= '<td><b>CNPJ da empresa</b></td>';
		$html .= '<td><b>Situação na empresa</b></td>';
		$html .= '</tr>';

		$funcionario = new Funcionario;
		$conexao = new Conexao;
		$funcionarioController = new FuncionarioController($conexao, $funcionario);
		$funcionarios = $funcionarioController->select_consulta();
		
		foreach ($funcionarios as $key => $value) {
			$atualstatus;
			$atualstatus = $value['status'] == "A" ? "Ativo" : "Desativado";
			$html .= '<tr>';
			$html .= '<td>'.$value["idfuncionario"].'</td>';
			$html .= '<td>'.$value["nome"].'</td>';
			$html .= '<td>'.$value["login"].'</td>';
			$html .= '<td>'.$value["empresa_cnpj"].'</td>';
			$html .= '<td>'.$atualstatus .'</td>';
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