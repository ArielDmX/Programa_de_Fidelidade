<?php
//Daniel//
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
	private $idcategoria_produto;
	private $categoria;

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
    private $dthr_compra;

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
    private $flag_status;
    private $descricao;
    private $valor;

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
	private $desc_niveis;
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

//Acaba Daniel//

//Ariel//


class Funcionario {
    private $idfuncionario;
    private $nome;
    private $login;
    private $senha;
    private $empresa_cnpj;
    private $status;

    public function __get($atributo) {
        return $this->$atributo;
    }

    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }
}

class Empresa{
    
    private $cnpj;
    private $razao_social;
    private $responsavel;

    public function __get($atributo) {
        return $this->$atributo;
    }

    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }
}
class Ponto{
    
    private $idponto;
    private $ponto_acumulado;
    private $ponto_transitado;
    private $data_opera;
    private $cliente_idcliente;
    private $credito_ou_debito;
    private $funcionario_idfuncionario;

    public function __get($atributo) {
        return $this->$atributo;
    }

    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }
}

//Fim Ariel//

//Gabriel//

class Cliente {
    private $idcliente;
    private $nome;
    private $email;
    private $senha;
    private $cpf;
    private $telefone;
    private $data_nasc;
    private $endereco_idendereco;
    private $categoria_de_cliente_idcategoria_de_cliente;
    private $flag_newsletter;

 public function __get($atributo){
    return $this->$atributo;

 }
 public function __set($atributo, $valor){
    $this->$atributo = $valor;
 }
}

class Endereco {
    private $idendereco;
    private $UF;
    private $cidade;
    private $bairro;
    private $logradouro;
    private $numero;
    private $complemento;
    private $cep;

    public function __get($atributo){
        return $this->$atributo;
    
     }
     public function __set($atributo, $valor){
        $this->$atributo = $valor;
     }
    }

class Nivel {
    private $idcategoria_de_cliente;
    private $nivel1;
    private $nivel2;
    private $nivel3;
    private $nivel4;
    private $nivel5;

    public function __get($atributo){
        return $this->$atributo;
    
     }
     public function __set($atributo, $valor){
        $this->$atributo = $valor;
     }


}

//Fim Gabriel//