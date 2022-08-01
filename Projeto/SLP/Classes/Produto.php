<?php

class Produto{
	public $idproduto;
	public $nome;
	public $valor;
	public $categoria_produto_idcategoria_produto;
	public $marca_idmarca;

	public function __get($atributo){
		return $this->$atributo;
	}

	public function __set($atributo, $valor){
		$this->$atributo = $valor;
	}
}

class Marca{
	public $idmarca;
	public $nome_marca;

	public function __get($atributo){
		return $this->$atributo;
	}

	public function __set($atributo, $valor){
		$this->$atributo = $valor;
	}
}

class Categoria_Produto{
	public $idcategoria_produto;
	public $categoria;

	public function __get($atributo){
		return $this->$atributo;
	}

	public function __set($atributo, $valor){
		$this->$atributo = $valor;
	}
}

class Compra{
	private $iditem;
	private $cod_compra;
	private $produto_idproduto;
	private $quantidade;
	private $cliente_idcliente;

	public function __get($atributo){
		return $this->$atributo;
	}

	public function __set($atributo, $valor){
		$this->$atributo = $valor;
	}
}

class Cupom{
	private $idCupom;
	private $cod_cupom;
	private $dthr_compra;
	private $cliente_idcliente;

	public function __get($atributo){
		return $this->$atributo;
	}

	public function __set($atributo, $valor){
		$this->$atributo = $valor;
	}
}

class Config{
	private $idConfig;
	private $qtde_niveis;
	private $des_niveis;
	private $multiplicador;
	private $dthr_alteracao;
	private $funcionario_idfuncionario;
	private $empresa_cnpj;

	public function __get($atributo){
		return $this->$atributo;
	}

	public function __set($atributo, $valor){
		$this->$atributo = $valor;
	}
}



//outro arquivo
$dsn = 'mysql:host=localhost;dbname=slpes';
$usuario = 'root';
$senha = '';


try{
	$conn = new PDO($dsn,$usuario ,$senha );
} catch(PDOException $e) {
	echo 'Erro: '.$e->getCode().' Mensagem: '.$e->getMessage();
}
//


//$conn = getConnection();

//$sql = "SELECT * FROM compra";
$sql = $_SESSION['query'];
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

$classe = $_SESSION['classe']

//$compra = new Compra();
echo '<pre>';

foreach ($result as $value) {
	$Compra-> iditem = $value['iditem'];
	$Compra-> cod_compra = $value['cod_compra'];
	$Compra-> produto_idproduto = $value['produto_idproduto'];
	$Compra-> quantidade = $value['quantidade'];
	$Compra-> cliente_idcliente = $value['Cliente_idcliente'];

	echo var_dump($Compra) . "<hr>";
}
echo '</pre>';

?>