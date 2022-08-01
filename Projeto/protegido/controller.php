<?php
//Daniel//
class ProdutoController{
	
	private $conexao;
	private $produto;

	public function __construct(Conexao $conexao, Categoria_Produto $categoria){
		$this->conexao = $conexao->conectar();;
		$this->produto = $produto;
	}

	public function create(){
		$query = 'INSERT INTO produto(nome, valor, categoria_produto_idcategoria_produto, marca_idmarca) VALUES(:nome, :valor, :categoria_produto_idcategoria_produto, :marca_idmarca)';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':nome', $this->produto->__get('nome'));
		$stmt->bindValue(':valor', $this->produto->__get('valor'));
		$stmt->bindValue(':categoria_produto_idcategoria_produto', $this->produto->__get('categoria_produto_idcategoria_produto'));
		$stmt->bindValue(':marca_idmarca', $this->produto->__get('marca_idmarca'));
		$stmt->execute();
	}

	public function select(){
		$query = 'SELECT * FROM produto';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function update(){
		$query = 'UPDATE produto SET produto = :nome = :valor = :categoria_produto_idcategoria_produto = :marca_idmarca WHERE idproduto = :id';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':nome', $this->produto->__get('nome'));
		$stmt->bindValue(':valor', $this->produto->__get('valor'));
		$stmt->bindValue(':id', $this->produto->__get('idproduto'));
		$stmt->bindValue(':marca_idmarca', $this->produto->__get('marca_idmarca'));
		$stmt->bindValue(':id', $this->produto->__get('idproduto'));
		return $stmt->execute();
		//print_r($this->categoria);
	}

	public function delete(){
		$query = 'DELETE FROM produto WHERE idproduto = :id';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id', $this->produto->__get('idproduto'));
		$stmt->execute();
	}

	
}

class MarcaController{
	
	private $conexao;
	private $marca;

	public function __construct(Conexao $conexao, Marca $marca){
		$this->conexao = $conexao->conectar();;
		$this->marca = $marca;
	}

	public function create(){
		$query = 'INSERT INTO marca(nome_marca) VALUES(:nome_marca)';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':nome_marca', $this->marca->__get('nome_marca'));
		$stmt->execute();
	}

	public function select(){
		$query = 'SELECT * FROM marca';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function update(){
		$query = 'UPDATE marca SET marca = :nome_marca WHERE idmarca = :id';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':nome_marca', $this->marca->__get('nome_marca'));
		$stmt->bindValue(':id', $this->marca->__get('idmarca'));
		return $stmt->execute();
		//print_r($this->categoria);
	}

	public function delete(){
		$query = 'DELETE FROM marca WHERE idmarca = :id';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id', $this->marca->__get('idmarca'));
		$stmt->execute();
	}

	
}

class Categoria_ProdutoController{

	private $conexao;
	private $categoria;

	public function __construct(Conexao $conexao, Categoria_Produto $categoria){
		$this->conexao = $conexao->conectar();;
		$this->categoria = $categoria;
	}

	public function create(){
		$query = 'INSERT INTO categoria_produto(categoria) VALUES(:categoria)';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':categoria', $this->categoria->__get('categoria'));
		$stmt->execute();
	}

	public function select(){
		$query = 'SELECT * FROM categoria_produto';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function update(){
		$query = 'UPDATE categoria_produto SET categoria = :categoria WHERE idcategoria_produto = :id';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':categoria', $this->categoria->__get('categoria'));
		$stmt->bindValue(':id', $this->categoria->__get('idcategoria_produto'));
		return $stmt->execute();
		//print_r($this->categoria);
	}

	public function delete(){
		$query = 'DELETE FROM categoria_produto WHERE idcategoria_produto = :id';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id', $this->categoria->__get('idcategoria_produto'));
		$stmt->execute();
	}

	
}

class CompraController{
	
	private $conexao;
	private $compra;

	public function __construct(Conexao $conexao, Compra $compra){
		$this->conexao = $conexao->conectar();;
		$this->compra = $compra;
	}

	public function create(){
		$query = 'INSERT INTO categoria_produto(categoria) VALUES(:categoria)';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':categoria', $this->categoria->__get('categoria'));
		$stmt->execute();
	}

	public function select(){
		$query = 'SELECT * FROM Compra';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function select_once(){
		$query = 'SELECT * FROM compra, produto WHERE cod_compra = :cod and produto.idproduto = compra.produto_idproduto';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':cod', $this->compra->__get('cod_compra'));
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function update(){
		$query = 'UPDATE compra SET  Cliente_idcliente = :Cliente_idcliente WHERE cod_compra = :id';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':Cliente_idcliente', $this->compra->__get('Cliente_idcliente'));
		$stmt->bindValue(':id', $this->compra->__get('cod_compra'));
		return $stmt->execute();
		//print_r($this->categoria);
	}

	public function delete(){
		$query = 'DELETE FROM categoria_produto WHERE idcategoria_produto = :id';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id', $this->categoria->__get('idcategoria_produto'));
		$stmt->execute();
	}

	
}

class CupomController{
	
	private $conexao;
	private $cupom;

	public function __construct(Conexao $conexao, Cupom $cupom){
		$this->conexao = $conexao->conectar();;
		$this->cupom = $cupom;
	}

	public function create(){
		$query = 'INSERT INTO cupom(cod_Cupom, Cliente_idcliente, descricao, valor) VALUES(:cod_cupom, :Cliente_idcliente, :descricao, :valor)';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':cod_cupom', $this->cupom->__get('cod_cupom'));
		$stmt->bindValue(':Cliente_idcliente', $this->cupom->__get('cliente_idcliente'));
		//$stmt->bindValue(':flag_status', $this->cupom->__get('flag_status'));
		$stmt->bindValue(':descricao', $this->cupom->__get('descricao'));
		$stmt->bindValue(':valor', $this->cupom->__get('valor'));
		$stmt->execute();
	}

	public function select(){
		$query = 'SELECT * FROM cupom WHERE Cliente_idcliente = :id ORDER BY idCupom DESC';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id', $this->cupom->__get('cliente_idcliente'));
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}
	public function select_all(){
		$query = 'SELECT * FROM cupom';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function select_consulta(){
		$query = 'SELECT * FROM cupom';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function consulta(){
		$query = 'SELECT * FROM Cupom WHERE cod_Cupom = :id LIMIT 1';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id', $this->cupom->__get('cod_cupom'));
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function select_once(){
		$query = 'SELECT * FROM Cupom WHERE idcupom = :id DESC LIMIT 1';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id', $this->cupom->__get('idcupom'));
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}
	/*public function update(){
		$query = 'UPDATE cupom SET cupom = :cod_Cupom = :dthr_compra = :Cliente_idcliente = :flag_status = :descricao = :valor WHERE idcupom = :id';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':cod_Cupom', $this->cupom->__get('cod_Cupom'));
		$stmt->bindValue(':dthr_compra', $this->cupom->__get('dthr_compra'));
		$stmt->bindValue(':Cliente_idcliente', $this->cupom->__get('Cliente_idcliente'));
		$stmt->bindValue(':flag_status', $this->cupom->__get('flag_status'));
		$stmt->bindValue(':descricao', $this->cupom->__get('descricao'));
		$stmt->bindValue(':valor', $this->cupom->__get('valor'));
		$stmt->bindValue(':id', $this->cupom->__get('idcupom'));
		return $stmt->execute();
		//print_r($this->categoria);
	}*/

	public function delete(){
		$query = 'DELETE FROM cupom WHERE idCupom = :id';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id', $this->marca->__get('idCupom'));
		$stmt->execute();
	}
	
}

class ConfigController{
	
	private $conexao;
	private $config;

	public function __construct(Conexao $conexao, Config $config){
		$this->conexao = $conexao->conectar();;
		$this->config = $config;
	}

	public function create(){
		$query = 'INSERT INTO config(qtde_niveis, desc_niveis, multiplicador, funcionario_idfuncionario, empresa_cnpj) VALUES(:qtde_niveis, :desc_niveis, :multiplicador, :funcionario_idfuncionario, :empresa_cnpj)';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':qtde_niveis', $this->config->__get('qtde_niveis'));
		$stmt->bindValue(':desc_niveis', $this->config->__get('desc_niveis'));
		$stmt->bindValue(':multiplicador', $this->config->__get('multiplicador'));
		//$stmt->bindValue(':dthr_alteracao', $this->config->__get('dthr_alteracao'));
		$stmt->bindValue(':funcionario_idfuncionario', $this->config->__get('funcionario_idfuncionario'));
		$stmt->bindValue(':empresa_cnpj', $this->config->__get('empresa_cnpj'));
		$stmt->execute();
	}

	public function select(){
		$query = 'SELECT * FROM config';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function select_once(){
		$query = 'SELECT * FROM config ORDER BY idconfig DESC LIMIT 1';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function update(){
		$query = 'UPDATE config SET config = :qtde_niveis = :desc_niveis = :multiplicador = :dthr_alteracao = :funcionario_idfuncionario = :empresa_cnpj WHERE idconfig = :id';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':qtde_niveis', $this->config->__get('qtde_niveis'));
		$stmt->bindValue(':desc_niveis', $this->config->__get('desc_niveis'));
		$stmt->bindValue(':multiplicador', $this->config->__get('multiplicador'));
		$stmt->bindValue(':dthr_alteracao', $this->config->__get('dthr_alteracao'));
		$stmt->bindValue(':funcionario_idfuncionario', $this->config->__get('funcionario_idfuncionario'));
		$stmt->bindValue(':empresa_cnpj', $this->config->__get('empresa_cnpj'));
		$stmt->bindValue(':id', $this->config->__get('idconfig'));
		return $stmt->execute();
		//print_r($this->categoria);
	}

	public function delete(){
		$query = 'DELETE FROM config WHERE idconfig = :id';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id', $this->config->__get('idconfig'));
		$stmt->execute();
	}

	
}

//Acaba Daniel//

//Ariel//

//Classe de Conexão//

class FuncionarioController {

	private $conexao;
	private $funcionario;

	public function __construct(Conexao $conexao, Funcionario $funcionario){
		$this->conexao = $conexao->conectar();;
		$this->funcionario = $funcionario;
	}

	public function create(){
		$query = 'INSERT INTO funcionario(nome, login, senha, empresa_cnpj) VALUES(:nome, :login, :senha, :empresa_cnpj)';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':nome', $this->funcionario->__get('nome'));
		$stmt->bindValue(':login', $this->funcionario->__get('login'));
		$stmt->bindValue(':senha', $this->funcionario->__get('senha'));
		$stmt->bindValue(':empresa_cnpj', $this->funcionario->__get('empresa_cnpj'));

		$stmt->execute();
		
	}

	public function select_once(){
		$query = 'SELECT * FROM funcionario ORDER BY idfuncionario DESC LIMIT 1';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function select_login(){
		$query = 'SELECT * FROM funcionario WHERE login = :login AND senha = :senha LIMIT 1';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':login', $this->funcionario->__get('login'));
		$stmt->bindValue(':senha', $this->funcionario->__get('senha'));
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function select_consulta(){
		$query = 'SELECT idfuncionario, nome, login, empresa_cnpj, `status` FROM funcionario';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':login', $this->funcionario->__get('login'));
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function select_test(){
		$query = 'SELECT * FROM funcionario WHERE login = :login LIMIT 1';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':login', $this->funcionario->__get('login'));
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function select(){
		$query = 'SELECT * FROM funcionario';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function update(){
		$query = 'UPDATE funcionario SET funcionario = :nome, = :login, = :senha, = :empresa_cnpj, = :status WHERE idfuncionario = :id';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':nome', $this->funcionario->__get('nome'));
		$stmt->bindValue(':login', $this->funcionario->__get('login'));
		$stmt->bindValue(':senha', $this->funcionario->__get('senha'));
		$stmt->bindValue(':empresa_cnpj', $this->funcionario->__get('empresa_cnpj'));
		$stmt->bindValue(':status', $this->funcionario->__get('status'));
		return $stmt->execute();
	}

	public function delete(){
		$query = 'DELETE FROM funcionario WHERE idfuncionario = :id';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id', $this->funcionario->__get('idfuncionario'));
		$stmt->execute();
	}

	
}

class EmpresaController{
	
	private $conexao;
	private $empresa;

	public function __construct(Conexao $conexao, Empresa $empresa){
		$this->conexao = $conexao->conectar();;
		$this->empresa = $empresa;
	}

	public function create(){
		$query = 'INSERT INTO empresa(razao_social, responsavel) VALUES(:razao_social, :responsavel)';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':razao_social', $this->empresa->__get('razao_social'));
		$stmt->bindValue(':responsavel', $this->empresa->__get('responsavel'));
		$stmt->execute();
	}


	public function select(){
		$query = 'SELECT * FROM Empresa';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function update(){
		$query = 'UPDATE empresa SET razao_social = :responsavel WHERE cnpj =:cnpj';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':razao_social', $this->empresa->__get('razao_social'));
		$stmt->bindValue(':responsavel', $this->empresa->__get('responsavel'));
		$stmt->bindValue(':cnpj', $this->empresa->__get('cnpj'));
		return $stmt->execute();
		//print_r($this->categoria);
	}

	public function delete(){
		$query = 'DELETE FROM empresa WHERE cnpj = :cnpj';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':cnpj', $this->empresa->__get('cnpj'));
		$stmt->execute();
	}

	
}
class PontoController{
	
	private $conexao;
	private $ponto;

	public function __construct(Conexao $conexao, Ponto $ponto){
		$this->conexao = $conexao->conectar();	
		$this->ponto = $ponto;
		
	}

	public function create(){
		$query = 'INSERT INTO ponto(ponto_acumulado,ponto_transitado,credito_ou_debito,cliente_idcliente,funcionario_idfuncionario) VALUES(:ponto_acumulado, :ponto_transitado, :credito_ou_debito, :cliente_idcliente, :funcionario_idfuncionario)';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':ponto_acumulado', $this->ponto->__get('ponto_acumulado'));
		$stmt->bindValue(':ponto_transitado', $this->ponto->__get('ponto_transitado'));
		$stmt->bindValue(':credito_ou_debito', $this->ponto->__get('credito_ou_debito'));
		$stmt->bindValue(':cliente_idcliente', $this->ponto->__get('cliente_idcliente'));
		$stmt->bindValue(':funcionario_idfuncionario', $this->ponto->__get('funcionario_idfuncionario'));
		$stmt->execute();
	}

	public function select(){
		$query = 'SELECT * FROM ponto';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function select_cliente(){
		$query = 'SELECT * FROM ponto WHERE cliente_idcliente = :id ORDER BY `ponto`.`idponto` DESC';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id', $this->ponto->__get('cliente_idcliente'));
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function select_once(){
		$query = 'SELECT * FROM ponto WHERE cliente_idcliente = :id ORDER BY `ponto`.`idponto` DESC LIMIT 1';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id', $this->ponto->__get('cliente_idcliente'));
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function update(){
		$query = 'UPDATE ponto SET ponto_acumulado = :ponto_acumulado, ponto_transitado = :ponto_transitado, credito_ou_debito = :credito_ou_debito, cliente_idcliente = :cliente_idcliente, funcionario_idfuncionario = :funcionario_idfuncionario WHERE idponto = :id';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':ponto_acumulado', $this->ponto->__get('ponto_acumulado'));
		$stmt->bindValue(':ponto_transitado', $this->ponto->__get('ponto_transitado'));
		$stmt->bindValue(':credito_ou_debito', $this->ponto->__get('credito_ou_debito'));
		$stmt->bindValue(':cliente_idcliente', $this->ponto->__get('cliente_idcliente'));
		$stmt->bindValue(':funcionario_idfuncionario', $this->ponto->__get('funcionario_idfuncionario'));
		$stmt->bindValue(':id', $this->ponto->__get('idponto'));
		return $stmt->execute();
		//print_r($this->categoria);
	}

	/*public function delete(){
		$query = 'DELETE FROM ponto_de_cliente WHERE idponto = :id';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id', $this->ponto->__get('idponto'));
		$stmt->execute();
	}*/

	
}
//Fim classe conexao//
//Fim Ariel//

//Gabriel//

class ClienteController {

	private $conexao;
	private $cliente;

	public function __construct(Conexao $conexao, Cliente $cliente){
		$this->conexao = $conexao->conectar();;
		$this->cliente = $cliente;
	}

	public function create(){
		$query = 'INSERT INTO cliente(nome, email, senha, cpf, telefone, data_nasc, endereco_idendereco, categoria_de_cliente_idcategoria_de_cliente, flag_newsletter) VALUES(:nome, :email, :senha, :cpf, :telefone, :data_nasc, :endereco_idendereco, :categoria_de_cliente_idcategoria_de_cliente, :flag_newsletter)';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':nome', $this->cliente->__get('nome'));
		$stmt->bindValue(':email', $this->cliente->__get('email'));
		$stmt->bindValue(':senha', $this->cliente->__get('senha'));
		$stmt->bindValue(':cpf', $this->cliente->__get('cpf'));
		$stmt->bindValue(':telefone', $this->cliente->__get('telefone'));
		$stmt->bindValue(':data_nasc', $this->cliente->__get('data_nasc'));
		$stmt->bindValue(':endereco_idendereco', $this->cliente->__get('endereco_idendereco'));
		$stmt->bindValue(':categoria_de_cliente_idcategoria_de_cliente', $this->cliente->__get('categoria_de_cliente_idcategoria_de_cliente'));
		$stmt->bindValue(':flag_newsletter', $this->cliente->__get('flag_newsletter'));
		$stmt->execute();
	}

	public function select_consulta(){
		$query = 'SELECT idcliente, nome, email, cpf, telefone, data_nasc, flag_newsletter FROM cliente';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function select(){
		$query = 'SELECT * FROM cliente';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function consulta(){
		$query = 'SELECT * FROM cliente WHERE idcliente = :idcliente';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':idcliente', $this->cliente->__get('idcliente'));
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function select_login(){
		$query = 'SELECT * FROM cliente WHERE email = :email AND senha = :senha LIMIT 1';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':email', $this->cliente->__get('email'));
		$stmt->bindValue(':senha', $this->cliente->__get('senha'));
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function select_recupera(){
		$query = 'SELECT * FROM cliente WHERE email = :email AND cpf = :cpf LIMIT 1';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':email', $this->cliente->__get('email'));
		$stmt->bindValue(':cpf', $this->cliente->__get('cpf'));
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function select_cpf(){
		$query = 'SELECT * FROM cliente WHERE cpf = :cpf';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':cpf', $this->cliente->__get('cpf'));
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function update(){
		$query = 'UPDATE cliente SET nome = :nome, email = :email, telefone = :telefone, data_nasc = :data_nasc WHERE idcliente = :id';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':nome', $this->cliente->__get('nome'));
		$stmt->bindValue(':email', $this->cliente->__get('email'));
		$stmt->bindValue(':telefone', $this->cliente->__get('telefone'));
		$stmt->bindValue(':data_nasc', $this->cliente->__get('data_nasc'));
		$stmt->bindValue(':id', $this->cliente->__get('idcliente'));
		return $stmt->execute();
		//print_r($this->categoria);
	}

	public function delete(){
		$query = 'DELETE FROM cliente WHERE idcliente = :id';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id', $this->cliente->__get('idcliente'));
		$stmt->execute();
	}

}	

class EnderecoController {

	private $conexao;
	private $endereco;

	public function __construct(Conexao $conexao, Endereco $endereco){
		$this->conexao = $conexao->conectar();;
		$this->endereco = $endereco;
	}

	public function create(){
		$query = 'INSERT INTO endereco(UF, cidade, bairro, logradouro, numero, complemento, cep) VALUES(:UF, :cidade, :bairro, :logradouro, :numero, :complemento, :cep)';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':UF', $this->endereco->__get('UF'));
		$stmt->bindValue(':cidade', $this->endereco->__get('cidade'));
		$stmt->bindValue(':bairro', $this->endereco->__get('bairro'));
		$stmt->bindValue(':logradouro', $this->endereco->__get('logradouro'));
		$stmt->bindValue(':numero', $this->endereco->__get('numero'));
		$stmt->bindValue(':complemento', $this->endereco->__get('complemento'));
		$stmt->bindValue(':cep', $this->endereco->__get('cep'));
		$stmt->execute();
		
	}

	public function select_once(){
		$query = 'SELECT * FROM endereco ORDER BY idendereco DESC LIMIT 1';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}


	public function select(){
		$query = 'SELECT * FROM endereco';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function update(){
		$query = 'UPDATE endereco SET endereco = :UF, = :cidade, = :bairro, = :logradouro, = :numero, = :complemento, = :cep WHERE idendereco = :id';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':UF', $this->endereco->__get('UF'));
		$stmt->bindValue(':bairro', $this->endereco->__get('bairro'));
		$stmt->bindValue(':logradouro', $this->endereco->__get('logradouro'));
		$stmt->bindValue(':numero', $this->endereco->__get('numero'));
		$stmt->bindValue(':complemento', $this->endereco->__get('complemento'));
		$stmt->bindValue(':cep', $this->endereco->__get('cep'));
		$stmt->bindValue(':id', $this->endereco->__get('idendereco'));
		return $stmt->execute();
	}

	public function delete(){
		$query = 'DELETE FROM endereco WHERE idendereco = :id';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id', $this->endereco->__get('idendereco'));
		$stmt->execute();
	}
	
}

class NivelController {
	
	private $conexao;
	private $nivel;
	

	public function __construct(Conexao $conexao, Nivel $nivel){
		$this->conexao = $conexao->conectar();
		$this->nivel = $nivel;
		
	}

	public function create(){
		$query = 'INSERT INTO nivel_de_cliente(nivel1,nivel2,nivel3,nivel4,nivel5) VALUES(:nivel1, :nivel2, :nivel3, :nivel4, :nivel5)';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':nivel1', $this->nivel->__get('nivel1'));
		$stmt->bindValue(':nivel2', $this->nivel->__get('nivel2'));
		$stmt->bindValue(':nivel3', $this->nivel->__get('nivel3'));
		$stmt->bindValue(':nivel4', $this->nivel->__get('nivel4'));
		$stmt->bindValue(':nivel5', $this->nivel->__get('nivel5'));
		$stmt->execute();
	}

	public function select(){
		$query = 'SELECT * FROM nivel_de_cliente WHERE idcategoria_de_cliente = :categoria_de_cliente';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':categoria_de_cliente', $this->nivel->__get('idcategoria_de_cliente'));
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function select_all(){
		$query = 'SELECT * FROM nivel_de_cliente';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function select_once(){
		$query = 'SELECT * FROM nivel_de_cliente ORDER BY idcategoria_de_cliente DESC LIMIT 1';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function update(){
		$query = 'UPDATE nivel_de_cliente SET nivel1 = :nivel1, nivel2 = :nivel2, nivel3 = :nivel3, nivel5 = :nivel5, nivel5 = :nivel5 WHERE idcategoria_de_cliente = :id';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':nivel1', $this->nivel->__get('nivel1'));
		$stmt->bindValue(':nivel2', $this->nivel->__get('nivel2'));
		$stmt->bindValue(':nivel3', $this->nivel->__get('nivel3'));
		$stmt->bindValue(':nivel4', $this->nivel->__get('nivel4'));
		$stmt->bindValue(':nivel5', $this->nivel->__get('nivel5'));
		$stmt->bindValue(':id', $this->nivel->__get('idcategoria_de_cliente'));
		return $stmt->execute();
		//print_r($this->categoria);
	}

	public function delete(){
		$query = 'DELETE FROM categoria_produto WHERE idcategoria_de_cliente = :id';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id', $this->nivel->__get('idcategoria_de_cliente'));
		$stmt->execute();
	}

	
}

//Fim Gabriel//