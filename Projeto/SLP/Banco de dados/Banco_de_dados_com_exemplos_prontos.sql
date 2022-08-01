SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema slpes
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema slpes
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `slpes` DEFAULT CHARACTER SET utf8 ;
USE `slpes` ;

-- -----------------------------------------------------
-- Table `slpes`.`Endereco`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `slpes`.`Endereco` ;

CREATE TABLE IF NOT EXISTS `slpes`.`Endereco` (
  `idendereco` INT NOT NULL AUTO_INCREMENT,
  `UF` VARCHAR(2) NULL,
  `cidade` VARCHAR(50) NULL,
  `bairro` VARCHAR(50) NULL,
  `logradouro` VARCHAR(50) NULL,
  `numero` INT NULL,
  `complemento` VARCHAR(10) NULL,
  `cep` VARCHAR(8) NULL,
  PRIMARY KEY (`idendereco`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `slpes`.`Nivel_De_Cliente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `slpes`.`Nivel_De_Cliente` ;

CREATE TABLE IF NOT EXISTS `slpes`.`Nivel_De_Cliente` (
  `idcategoria_de_cliente` INT NOT NULL AUTO_INCREMENT,
  `nivel1` INT NULL,
  `nivel2` INT NULL,
  `nivel3` INT NULL,
  `nivel4` INT NULL,
  `nivel5` INT NULL,
  PRIMARY KEY (`idcategoria_de_cliente`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `slpes`.`Cliente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `slpes`.`Cliente` ;

CREATE TABLE IF NOT EXISTS `slpes`.`Cliente` (
  `idcliente` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(60) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(128) NOT NULL,
  `cpf` CHAR(14) NOT NULL,
  `telefone` VARCHAR(14) NOT NULL,
  `data_nasc` DATE NOT NULL,
  `endereco_idendereco` INT NOT NULL,
  `categoria_de_cliente_idcategoria_de_cliente` INT NOT NULL,
  `flag_newsletter` CHAR(1) NOT NULL DEFAULT 'D',
  PRIMARY KEY (`idcliente`, `endereco_idendereco`),
  INDEX `fk_cliente_endereco1_idx` (`endereco_idendereco` ASC),
  INDEX `fk_cliente_categoria_de_cliente1_idx` (`categoria_de_cliente_idcategoria_de_cliente` ASC),
  CONSTRAINT `fk_cliente_endereco1`
    FOREIGN KEY (`endereco_idendereco`)
    REFERENCES `slpes`.`Endereco` (`idendereco`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cliente_categoria_de_cliente1`
    FOREIGN KEY (`categoria_de_cliente_idcategoria_de_cliente`)
    REFERENCES `slpes`.`Nivel_De_Cliente` (`idcategoria_de_cliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `slpes`.`Empresa`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `slpes`.`Empresa` ;

CREATE TABLE IF NOT EXISTS `slpes`.`Empresa` (
  `cnpj` CHAR(14) NOT NULL,
  `razao_social` VARCHAR(255) NULL,
  `responsavel` VARCHAR(60) NULL,
  PRIMARY KEY (`cnpj`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `slpes`.`Funcionario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `slpes`.`Funcionario` ;

CREATE TABLE IF NOT EXISTS `slpes`.`Funcionario` (
  `idfuncionario` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(60) NOT NULL,
  `login` VARCHAR(16) NOT NULL,
  `senha` VARCHAR(128) NOT NULL,
  `empresa_cnpj` CHAR(14) NOT NULL,
  `status` CHAR(1) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`idfuncionario`),
  INDEX `fk_funcionario_empresa1_idx` (`empresa_cnpj` ASC),
  CONSTRAINT `fk_funcionario_empresa1`
    FOREIGN KEY (`empresa_cnpj`)
    REFERENCES `slpes`.`Empresa` (`cnpj`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `slpes`.`Ponto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `slpes`.`Ponto` ;

CREATE TABLE IF NOT EXISTS `slpes`.`Ponto` (
  `idponto` INT NOT NULL AUTO_INCREMENT,
  `ponto_acumulado` INT NOT NULL DEFAULT 0,
  `ponto_transitado` INT NULL DEFAULT 0,
  `credito_ou_debito` CHAR NULL,
  `data_opera` DATE NULL DEFAULT current_timestamp(),
  `cliente_idcliente` INT NOT NULL,
  `funcionario_idfuncionario` INT NULL,
  PRIMARY KEY (`idponto`),
  INDEX `fk_pontos_cliente1_idx` (`cliente_idcliente` ASC),
  INDEX `fk_pontos_funcionario1_idx` (`funcionario_idfuncionario` ASC),
  CONSTRAINT `fk_pontos_cliente1`
    FOREIGN KEY (`cliente_idcliente`)
    REFERENCES `slpes`.`Cliente` (`idcliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pontos_funcionario1`
    FOREIGN KEY (`funcionario_idfuncionario`)
    REFERENCES `slpes`.`Funcionario` (`idfuncionario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `slpes`.`Categoria_Produto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `slpes`.`Categoria_Produto` ;

CREATE TABLE IF NOT EXISTS `slpes`.`Categoria_Produto` (
  `idcategoria_produto` INT NOT NULL AUTO_INCREMENT,
  `categoria` VARCHAR(20) NULL,
  PRIMARY KEY (`idcategoria_produto`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `slpes`.`Marca`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `slpes`.`Marca` ;

CREATE TABLE IF NOT EXISTS `slpes`.`Marca` (
  `idmarca` INT NOT NULL AUTO_INCREMENT,
  `nome_marca` VARCHAR(30) NULL,
  PRIMARY KEY (`idmarca`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `slpes`.`Produto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `slpes`.`Produto` ;

CREATE TABLE IF NOT EXISTS `slpes`.`Produto` (
  `idproduto` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `valor` FLOAT NULL,
  `categoria_produto_idcategoria_produto` INT NOT NULL,
  `marca_idmarca` INT NOT NULL,
  PRIMARY KEY (`idproduto`),
  INDEX `fk_produto_categoria_produto1_idx` (`categoria_produto_idcategoria_produto` ASC),
  INDEX `fk_produto_marca1_idx` (`marca_idmarca` ASC),
  CONSTRAINT `fk_produto_categoria_produto1`
    FOREIGN KEY (`categoria_produto_idcategoria_produto`)
    REFERENCES `slpes`.`Categoria_Produto` (`idcategoria_produto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_produto_marca1`
    FOREIGN KEY (`marca_idmarca`)
    REFERENCES `slpes`.`Marca` (`idmarca`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `slpes`.`Compra`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `slpes`.`Compra` ;

CREATE TABLE IF NOT EXISTS `slpes`.`Compra` (
  `iditem` INT NOT NULL AUTO_INCREMENT,
  `cod_compra` CHAR(14) NOT NULL,
  `produto_idproduto` INT NOT NULL,
  `quantidade` INT NULL,
  `Cliente_idcliente` INT NULL,
  `dthr_compra` DATETIME NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`iditem`),
  INDEX `fk_compras_produto1_idx` (`produto_idproduto` ASC),
  INDEX `fk_Compra_Cliente1_idx` (`Cliente_idcliente` ASC),
  CONSTRAINT `fk_compras_produto1`
    FOREIGN KEY (`produto_idproduto`)
    REFERENCES `slpes`.`Produto` (`idproduto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Compra_Cliente1`
    FOREIGN KEY (`Cliente_idcliente`)
    REFERENCES `slpes`.`Cliente` (`idcliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `slpes`.`Cupom`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `slpes`.`Cupom` ;

CREATE TABLE IF NOT EXISTS `slpes`.`Cupom` (
  `idCupom` INT NOT NULL AUTO_INCREMENT,
  `cod_Cupom` VARCHAR(45) NOT NULL,
  `dthr_compra` DATETIME NOT NULL DEFAULT current_timestamp(),
  `Cliente_idcliente` INT NOT NULL,
  `flag_status` CHAR(1) NOT NULL DEFAULT 'A',
  `descricao` TEXT(120) NULL,
  `valor` INT NULL,
  INDEX `fk_Cupom_Cliente1_idx` (`Cliente_idcliente` ASC),
  PRIMARY KEY (`idCupom`),
  CONSTRAINT `fk_Cupom_Cliente1`
    FOREIGN KEY (`Cliente_idcliente`)
    REFERENCES `slpes`.`Cliente` (`idcliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `slpes`.`Config`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `slpes`.`Config` ;

CREATE TABLE IF NOT EXISTS `slpes`.`Config` (
  `idConfig` INT NOT NULL AUTO_INCREMENT,
  `qtde_niveis` INT NOT NULL,
  `desc_niveis` LONGTEXT NOT NULL,
  `multiplicador` DOUBLE NOT NULL COMMENT 'constante qual o valor da compra será multiplicado para a conversão de pontos',
  `dthr_alteracao` DATETIME GENERATED ALWAYS AS (current_timestamp()) VIRTUAL,
  `funcionario_idfuncionario` INT NOT NULL COMMENT 'Funcionário que fez a alteração',
  `empresa_cnpj` CHAR(14) NOT NULL COMMENT 'Empresa qual as regras se aplicam',
  PRIMARY KEY (`idConfig`),
  INDEX `fk_Config_Funcionario1_idx` (`funcionario_idfuncionario` ASC),
  INDEX `fk_Config_Empresa1_idx` (`empresa_cnpj` ASC),
  CONSTRAINT `fk_Config_Funcionario1`
    FOREIGN KEY (`funcionario_idfuncionario`)
    REFERENCES `slpes`.`Funcionario` (`idfuncionario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Config_Empresa1`
    FOREIGN KEY (`empresa_cnpj`)
    REFERENCES `slpes`.`Empresa` (`cnpj`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;



-- Começa a popular o banco de dados --

  -- Cria e empresa --

INSERT INTO `empresa` (`cnpj`, `razao_social`, `responsavel`) VALUES ('64468886000186', 'Hogwarts', 'Albus Percival Vufrico Brian Dumbledore');

  -- Cria os funcionários--

INSERT INTO `funcionario` (`idfuncionario`, `nome`, `login`, `senha`, `empresa_cnpj`) VALUES (NULL, 'Minerva McGonagall', 'Minerva', 'gato', '64468886000186');
INSERT INTO `funcionario` (`idfuncionario`, `nome`, `login`, `senha`, `empresa_cnpj`) VALUES (NULL, 'Severus Snape', 'Severo', 'lilian', '64468886000186');
INSERT INTO `funcionario` (`idfuncionario`, `nome`, `login`, `senha`, `empresa_cnpj`) VALUES (NULL, 'Rúbeo Hagrid', 'Hagrid', 'dragao', '64468886000186');

  -- Niveis --


INSERT INTO `nivel_de_cliente` (`idcategoria_de_cliente`, `nivel1`, `nivel2`, `nivel3`, `nivel4`, `nivel5`) VALUES ('1', '0', '0', '0', '0', '0');
INSERT INTO `nivel_de_cliente` (`idcategoria_de_cliente`, `nivel1`, `nivel2`, `nivel3`, `nivel4`, `nivel5`) VALUES ('2', '0', '0', '0', '0', '0');
INSERT INTO `nivel_de_cliente` (`idcategoria_de_cliente`, `nivel1`, `nivel2`, `nivel3`, `nivel4`, `nivel5`) VALUES ('3', '0', '0', '0', '0', '0');
INSERT INTO `nivel_de_cliente` (`idcategoria_de_cliente`, `nivel1`, `nivel2`, `nivel3`, `nivel4`, `nivel5`) VALUES ('4', '0', '0', '0', '0', '0');
INSERT INTO `nivel_de_cliente` (`idcategoria_de_cliente`, `nivel1`, `nivel2`, `nivel3`, `nivel4`, `nivel5`) VALUES ('5', '0', '0', '0', '0', '0');

  -- Endereçços --

INSERT INTO `endereco` (`idendereco`, `UF`, `cidade`, `bairro`, `logradouro`, `numero`, `complemento`, `cep`) VALUES ('1', 'SP', 'Cidade 1', 'Bairro 1', 'Rua 1', '111', 'casa', '12711111');
INSERT INTO `endereco` (`idendereco`, `UF`, `cidade`, `bairro`, `logradouro`, `numero`, `complemento`, `cep`) VALUES ('2', 'SP', 'Cidade 2', 'Bairro 2', 'Rua 2', '222', 'apto', '12711222');
INSERT INTO `endereco` (`idendereco`, `UF`, `cidade`, `bairro`, `logradouro`, `numero`, `complemento`, `cep`) VALUES ('3', 'SP', 'Cidade 3', 'Bairro 3', 'Rua 3', '333', 'fund', '12711333');
INSERT INTO `endereco` (`idendereco`, `UF`, `cidade`, `bairro`, `logradouro`, `numero`, `complemento`, `cep`) VALUES ('4', 'SP', 'Cidade 4', 'Bairro 4', 'Rua 4', '444', 'apto', '12711444');
INSERT INTO `endereco` (`idendereco`, `UF`, `cidade`, `bairro`, `logradouro`, `numero`, `complemento`, `cep`) VALUES ('5', 'SP', 'Cidade 5', 'Bairro 5', 'Rua 5', '555', 'fund', '12711555');

  --  Clientes --
INSERT INTO `cliente` (`idcliente`, `nome`, `email`, `senha`, `cpf`, `telefone`, `data_nasc`, `endereco_idendereco`, `categoria_de_cliente_idcategoria_de_cliente`) VALUES (NULL, 'Harry Potter', 'hp@hogwarts.wiz','e10adc3949ba59abbe56e057f20f883e','111.111.111-11', '(11)11111-1111', '1915-07-10', '1', '1');
INSERT INTO `cliente` (`idcliente`, `nome`, `email`, `senha`, `cpf`, `telefone`, `data_nasc`, `endereco_idendereco`, `categoria_de_cliente_idcategoria_de_cliente`) VALUES (NULL, 'Cliente 2', 'cliente2@cliente2.com','e10adc3949ba59abbe56e057f20f883e','222.222.222-22', '(22)22222-2222', '2012-02-02', '2', '2');
INSERT INTO `cliente` (`idcliente`, `nome`, `email`, `cpf`, `telefone`, `data_nasc`, `endereco_idendereco`, `categoria_de_cliente_idcategoria_de_cliente`) VALUES (NULL, 'Cliente 3', 'cliente3@cliente3.com', '333.333.333-33', '(33)33333-3333', '2013-03-03', '3', '3');
INSERT INTO `cliente` (`idcliente`, `nome`, `email`, `cpf`, `telefone`, `data_nasc`, `endereco_idendereco`, `categoria_de_cliente_idcategoria_de_cliente`) VALUES (NULL, 'Cliente 4', 'cliente4@cliente4.com', '444.444.444-44', '(44)44444-4444', '2014-04-04', '4', '4');
INSERT INTO `cliente` (`idcliente`, `nome`, `email`, `cpf`, `telefone`, `data_nasc`, `endereco_idendereco`, `categoria_de_cliente_idcategoria_de_cliente`) VALUES (NULL, 'Cliente 5', 'cliente5@cliente5.com', '555.555.555-55', '(55)55555-5555', '2015-05-05', '5', '5');

  -- Pontos --
INSERT INTO `ponto` (`idponto`, `ponto_acumulado`, `ponto_transitado`, `credito_ou_debito`, `data_opera`, `cliente_idcliente`, `funcionario_idfuncionario`) VALUES (NULL, '1000', '100', 'c', '2020-05-03', '1', '1');
INSERT INTO `ponto` (`idponto`, `ponto_acumulado`, `ponto_transitado`, `credito_ou_debito`, `data_opera`, `cliente_idcliente`, `funcionario_idfuncionario`) VALUES (NULL, '2000', '200', 'd', '2020-05-03', '2', '2');
INSERT INTO `ponto` (`idponto`, `ponto_acumulado`, `ponto_transitado`, `credito_ou_debito`, `data_opera`, `cliente_idcliente`, `funcionario_idfuncionario`) VALUES (NULL, '3000', '300', 'c', '2020-05-03', '3', NULL);
INSERT INTO `ponto` (`idponto`, `ponto_acumulado`, `ponto_transitado`, `credito_ou_debito`, `data_opera`, `cliente_idcliente`, `funcionario_idfuncionario`) VALUES (NULL, '4000', '400', 'd', '2020-05-03', '4', NULL);
INSERT INTO `ponto` (`idponto`, `ponto_acumulado`, `ponto_transitado`, `credito_ou_debito`, `data_opera`, `cliente_idcliente`, `funcionario_idfuncionario`) VALUES (NULL, '5000', '500', 'c', '2020-05-03', '5', NULL);

INSERT INTO `ponto` (`idponto`, `ponto_acumulado`, `ponto_transitado`, `credito_ou_debito`, `data_opera`, `cliente_idcliente`, `funcionario_idfuncionario`) VALUES (NULL, '2000', '200', 'd', '2020-05-03', '1', NULL);
INSERT INTO `ponto` (`idponto`, `ponto_acumulado`, `ponto_transitado`, `credito_ou_debito`, `data_opera`, `cliente_idcliente`, `funcionario_idfuncionario`) VALUES (NULL, '4000', '400', 'c', '2020-05-03', '2', NULL);
INSERT INTO `ponto` (`idponto`, `ponto_acumulado`, `ponto_transitado`, `credito_ou_debito`, `data_opera`, `cliente_idcliente`, `funcionario_idfuncionario`) VALUES (NULL, '6000', '600', 'd', '2020-05-03', '3', '1');
INSERT INTO `ponto` (`idponto`, `ponto_acumulado`, `ponto_transitado`, `credito_ou_debito`, `data_opera`, `cliente_idcliente`, `funcionario_idfuncionario`) VALUES (NULL, '8000', '800', 'c', '2020-05-03', '4', '2');
INSERT INTO `ponto` (`idponto`, `ponto_acumulado`, `ponto_transitado`, `credito_ou_debito`, `data_opera`, `cliente_idcliente`, `funcionario_idfuncionario`) VALUES (NULL, '10000', '1000', 'd', '2020-05-03', '5', NULL);

INSERT INTO `ponto` (`idponto`, `ponto_acumulado`, `ponto_transitado`, `credito_ou_debito`, `data_opera`, `cliente_idcliente`, `funcionario_idfuncionario`) VALUES (NULL, '4000', '400', 'c', '2020-05-03', '1', '2');
INSERT INTO `ponto` (`idponto`, `ponto_acumulado`, `ponto_transitado`, `credito_ou_debito`, `data_opera`, `cliente_idcliente`, `funcionario_idfuncionario`) VALUES (NULL, '8000', '800', 'd', '2020-05-03', '2', NULL);
INSERT INTO `ponto` (`idponto`, `ponto_acumulado`, `ponto_transitado`, `credito_ou_debito`, `data_opera`, `cliente_idcliente`, `funcionario_idfuncionario`) VALUES (NULL, '12000', '1200', 'c', '2020-05-03', '3', NULL);
INSERT INTO `ponto` (`idponto`, `ponto_acumulado`, `ponto_transitado`, `credito_ou_debito`, `data_opera`, `cliente_idcliente`, `funcionario_idfuncionario`) VALUES (NULL, '16000', '1600', 'd', '2020-05-03', '4', NULL);
INSERT INTO `ponto` (`idponto`, `ponto_acumulado`, `ponto_transitado`, `credito_ou_debito`, `data_opera`, `cliente_idcliente`, `funcionario_idfuncionario`) VALUES (NULL, '20000', '2000', 'c', '2020-05-03', '5', '1');

INSERT INTO `ponto` (`idponto`, `ponto_acumulado`, `ponto_transitado`, `credito_ou_debito`, `data_opera`, `cliente_idcliente`, `funcionario_idfuncionario`) VALUES (NULL, '8000', '800', 'd', '2020-05-03', '1', NULL);
INSERT INTO `ponto` (`idponto`, `ponto_acumulado`, `ponto_transitado`, `credito_ou_debito`, `data_opera`, `cliente_idcliente`, `funcionario_idfuncionario`) VALUES (NULL, '16000', '1600', 'c', '2020-05-03', '2', '1');
INSERT INTO `ponto` (`idponto`, `ponto_acumulado`, `ponto_transitado`, `credito_ou_debito`, `data_opera`, `cliente_idcliente`, `funcionario_idfuncionario`) VALUES (NULL, '24000', '2400', 'd', '2020-05-03', '3', '2');
INSERT INTO `ponto` (`idponto`, `ponto_acumulado`, `ponto_transitado`, `credito_ou_debito`, `data_opera`, `cliente_idcliente`, `funcionario_idfuncionario`) VALUES (NULL, '32000', '3200', 'c', '2020-05-03', '4', NULL);
INSERT INTO `ponto` (`idponto`, `ponto_acumulado`, `ponto_transitado`, `credito_ou_debito`, `data_opera`, `cliente_idcliente`, `funcionario_idfuncionario`) VALUES (NULL, '40000', '4000', 'd', '2020-05-03', '5', NULL);

INSERT INTO `ponto` (`idponto`, `ponto_acumulado`, `ponto_transitado`, `credito_ou_debito`, `data_opera`, `cliente_idcliente`, `funcionario_idfuncionario`) VALUES (NULL, '16000', '1600', 'c', '2020-05-03', '1', NULL);
INSERT INTO `ponto` (`idponto`, `ponto_acumulado`, `ponto_transitado`, `credito_ou_debito`, `data_opera`, `cliente_idcliente`, `funcionario_idfuncionario`) VALUES (NULL, '32000', '3200', 'd', '2020-05-03', '2', NULL);
INSERT INTO `ponto` (`idponto`, `ponto_acumulado`, `ponto_transitado`, `credito_ou_debito`, `data_opera`, `cliente_idcliente`, `funcionario_idfuncionario`) VALUES (NULL, '48000', '4800', 'c', '2020-05-03', '3', NULL);
INSERT INTO `ponto` (`idponto`, `ponto_acumulado`, `ponto_transitado`, `credito_ou_debito`, `data_opera`, `cliente_idcliente`, `funcionario_idfuncionario`) VALUES (NULL, '64000', '6400', 'd', '2020-05-03', '4', '1');
INSERT INTO `ponto` (`idponto`, `ponto_acumulado`, `ponto_transitado`, `credito_ou_debito`, `data_opera`, `cliente_idcliente`, `funcionario_idfuncionario`) VALUES (NULL, '80000', '8000', 'c', '2020-05-03', '5', '2');

 -- Marcas --
INSERT INTO `marca` (`idmarca`, `nome_marca`) VALUES (NULL, 'Raroz');
INSERT INTO `marca` (`idmarca`, `nome_marca`) VALUES (NULL, 'Skol');
INSERT INTO `marca` (`idmarca`, `nome_marca`) VALUES (NULL, 'Guaranita');
INSERT INTO `marca` (`idmarca`, `nome_marca`) VALUES (NULL, 'Império');
INSERT INTO `marca` (`idmarca`, `nome_marca`) VALUES (NULL, 'Friboi');
INSERT INTO `marca` (`idmarca`, `nome_marca`) VALUES (NULL, 'Petra');
INSERT INTO `marca` (`idmarca`, `nome_marca`) VALUES (NULL, 'Sucrilhos');
INSERT INTO `marca` (`idmarca`, `nome_marca`) VALUES (NULL, 'Qualy');
INSERT INTO `marca` (`idmarca`, `nome_marca`) VALUES (NULL, 'Nescau');
INSERT INTO `marca` (`idmarca`, `nome_marca`) VALUES (NULL, 'Jussara');
INSERT INTO `marca` (`idmarca`, `nome_marca`) VALUES (NULL, 'Nonita');
INSERT INTO `marca` (`idmarca`, `nome_marca`) VALUES (NULL, 'Ypê');
INSERT INTO `marca` (`idmarca`, `nome_marca`) VALUES (NULL, 'Tang');
INSERT INTO `marca` (`idmarca`, `nome_marca`) VALUES (NULL, 'Padaria');
INSERT INTO `marca` (`idmarca`, `nome_marca`) VALUES (NULL, 'Fofo');
INSERT INTO `marca` (`idmarca`, `nome_marca`) VALUES (NULL, 'Bombril');
INSERT INTO `marca` (`idmarca`, `nome_marca`) VALUES (NULL, 'Panco');
INSERT INTO `marca` (`idmarca`, `nome_marca`) VALUES (NULL, 'Pullman');
INSERT INTO `marca` (`idmarca`, `nome_marca`) VALUES (NULL, 'Club Social');
INSERT INTO `marca` (`idmarca`, `nome_marca`) VALUES (NULL, 'Maria');
INSERT INTO `marca` (`idmarca`, `nome_marca`) VALUES (NULL, 'Feira');
  -- Categorias --
INSERT INTO `categoria_produto` (`idcategoria_produto`, `categoria`) VALUES (NULL, 'Limpeza');
INSERT INTO `categoria_produto` (`idcategoria_produto`, `categoria`) VALUES (NULL, 'Condimentos');
INSERT INTO `categoria_produto` (`idcategoria_produto`, `categoria`) VALUES (NULL, 'Matinais');
INSERT INTO `categoria_produto` (`idcategoria_produto`, `categoria`) VALUES (NULL, 'Cereais');
INSERT INTO `categoria_produto` (`idcategoria_produto`, `categoria`) VALUES (NULL, 'Bebidas alcoólicas');
INSERT INTO `categoria_produto` (`idcategoria_produto`, `categoria`) VALUES (NULL, 'Bebidas');
INSERT INTO `categoria_produto` (`idcategoria_produto`, `categoria`) VALUES (NULL, 'Lacticícios');
INSERT INTO `categoria_produto` (`idcategoria_produto`, `categoria`) VALUES (NULL, 'Frios');
INSERT INTO `categoria_produto` (`idcategoria_produto`, `categoria`) VALUES (NULL, 'Açougue');
INSERT INTO `categoria_produto` (`idcategoria_produto`, `categoria`) VALUES (NULL, 'Massas');
INSERT INTO `categoria_produto` (`idcategoria_produto`, `categoria`) VALUES (NULL, 'Hortifruti');
INSERT INTO `categoria_produto` (`idcategoria_produto`, `categoria`) VALUES (NULL, 'Padaria');
INSERT INTO `categoria_produto` (`idcategoria_produto`, `categoria`) VALUES (NULL, 'Descartáveis');
INSERT INTO `categoria_produto` (`idcategoria_produto`, `categoria`) VALUES (NULL, 'Animais');
INSERT INTO `categoria_produto` (`idcategoria_produto`, `categoria`) VALUES (NULL, 'Doces');
INSERT INTO `categoria_produto` (`idcategoria_produto`, `categoria`) VALUES (NULL, 'Mercearia');

-- Produto --
INSERT INTO `produto` (`idproduto`, `nome`, `valor`, `categoria_produto_idcategoria_produto`, `marca_idmarca`) VALUES (NULL, 'Amaciante concentrado 500ml', '10.90', '1', '15');
INSERT INTO `produto` (`idproduto`, `nome`, `valor`, `categoria_produto_idcategoria_produto`, `marca_idmarca`) VALUES (NULL, 'Cerveja Lata 350ml', '2.65', '6', '2');
INSERT INTO `produto` (`idproduto`, `nome`, `valor`, `categoria_produto_idcategoria_produto`, `marca_idmarca`) VALUES (NULL, 'Refrigerante Guaranita 2L', '3.19', '7', '3');
INSERT INTO `produto` (`idproduto`, `nome`, `valor`, `categoria_produto_idcategoria_produto`, `marca_idmarca`) VALUES (NULL, 'Cerveja Lata 259ml', '1.80', '6', '4');
INSERT INTO `produto` (`idproduto`, `nome`, `valor`, `categoria_produto_idcategoria_produto`, `marca_idmarca`) VALUES (NULL, 'Arroz Tipo 1 5Kg', '12.56', '5', '1');
INSERT INTO `produto` (`idproduto`, `nome`, `valor`, `categoria_produto_idcategoria_produto`, `marca_idmarca`) VALUES (NULL, 'Cerveja Puro Malte Lata 350ml', '2.98', '6', '6');
INSERT INTO `produto` (`idproduto`, `nome`, `valor`, `categoria_produto_idcategoria_produto`, `marca_idmarca`) VALUES (NULL, 'Cereais Matinal Milho 500gr', '8.93', '5', '8');
INSERT INTO `produto` (`idproduto`, `nome`, `valor`, `categoria_produto_idcategoria_produto`, `marca_idmarca`) VALUES (NULL, 'Margarina c/ sal 500gr', '5.89', '8', '8');
INSERT INTO `produto` (`idproduto`, `nome`, `valor`, `categoria_produto_idcategoria_produto`, `marca_idmarca`) VALUES (NULL, 'Achocolatado em pó Nescau 2.0 500gr', '5.79', '4', '9');
INSERT INTO `produto` (`idproduto`, `nome`, `valor`, `categoria_produto_idcategoria_produto`, `marca_idmarca`) VALUES (NULL, 'Leite Tradicional 1L', '3.58', '8', '10');
INSERT INTO `produto` (`idproduto`, `nome`, `valor`, `categoria_produto_idcategoria_produto`, `marca_idmarca`) VALUES (NULL, 'Farinha de Trigo tipo 1 500gr', '4.96', '5', '11');
INSERT INTO `produto` (`idproduto`, `nome`, `valor`, `categoria_produto_idcategoria_produto`, `marca_idmarca`) VALUES (NULL, 'Sabão Detergente liquido 500ml', '3.15', '2', '12');
INSERT INTO `produto` (`idproduto`, `nome`, `valor`, `categoria_produto_idcategoria_produto`, `marca_idmarca`) VALUES (NULL, 'Suco Tang Laranja 35gr', '1.40', '7', '13');
INSERT INTO `produto` (`idproduto`, `nome`, `valor`, `categoria_produto_idcategoria_produto`, `marca_idmarca`) VALUES (NULL, 'Suco Tang Morango 35gr', '1.40', '7', '13');
INSERT INTO `produto` (`idproduto`, `nome`, `valor`, `categoria_produto_idcategoria_produto`, `marca_idmarca`) VALUES (NULL, 'Suco Tang Maracujá 35gr', '1.40', '7', '13');
INSERT INTO `produto` (`idproduto`, `nome`, `valor`, `categoria_produto_idcategoria_produto`, `marca_idmarca`) VALUES (NULL, 'Suco Tang Uva 35gr', '1.40', '7', '13');
INSERT INTO `produto` (`idproduto`, `nome`, `valor`, `categoria_produto_idcategoria_produto`, `marca_idmarca`) VALUES (NULL, 'Pão Francês Kg', '17.35', '13', '14');
INSERT INTO `produto` (`idproduto`, `nome`, `valor`, `categoria_produto_idcategoria_produto`, `marca_idmarca`) VALUES (NULL, 'Esponja de aço 500gr', '3.40', '2', '16');
INSERT INTO `produto` (`idproduto`, `nome`, `valor`, `categoria_produto_idcategoria_produto`, `marca_idmarca`) VALUES (NULL, 'Biscoito Cream Cracker 900gr', '4.80', '4', '17');
INSERT INTO `produto` (`idproduto`, `nome`, `valor`, `categoria_produto_idcategoria_produto`, `marca_idmarca`) VALUES (NULL, 'Pão de Forma 500gr', '3.50', '13', '18');
INSERT INTO `produto` (`idproduto`, `nome`, `valor`, `categoria_produto_idcategoria_produto`, `marca_idmarca`) VALUES (NULL, 'Biscoito Club Social Original 390gr', '8.04', '4', '19');
INSERT INTO `produto` (`idproduto`, `nome`, `valor`, `categoria_produto_idcategoria_produto`, `marca_idmarca`) VALUES (NULL, 'Biscoito Maizena 493gr', '4.50', '4', '20');
INSERT INTO `produto` (`idproduto`, `nome`, `valor`, `categoria_produto_idcategoria_produto`, `marca_idmarca`) VALUES (NULL, 'Maçã Gala Kg', '4.90', '12', '21');
INSERT INTO `produto` (`idproduto`, `nome`, `valor`, `categoria_produto_idcategoria_produto`, `marca_idmarca`) VALUES (NULL, 'Limão Kg', '2.03', '12', '21');
INSERT INTO `produto` (`idproduto`, `nome`, `valor`, `categoria_produto_idcategoria_produto`, `marca_idmarca`) VALUES (NULL, 'Banana Nanica Kg', '3.65', '12', '21');

-- Compra --
INSERT INTO `compra` (`cod_compra`, `produto_idproduto`, `quantidade`, `Cliente_idcliente`) VALUES ('111111', '1', '1', '1');
INSERT INTO `compra` (`cod_compra`, `produto_idproduto`, `quantidade`, `Cliente_idcliente`) VALUES ('111111', '2', '1', '1');
INSERT INTO `compra` (`cod_compra`, `produto_idproduto`, `quantidade`, `Cliente_idcliente`) VALUES ('111111', '3', '1', '1');
INSERT INTO `compra` (`cod_compra`, `produto_idproduto`, `quantidade`, `Cliente_idcliente`) VALUES ('111111', '4', '1', '1');
INSERT INTO `compra` (`cod_compra`, `produto_idproduto`, `quantidade`, `Cliente_idcliente`) VALUES ('111111', '5', '1', '1');

INSERT INTO `compra` (`cod_compra`, `produto_idproduto`, `quantidade`, `Cliente_idcliente`) VALUES ('222222', '6', '1', '2');
INSERT INTO `compra` (`cod_compra`, `produto_idproduto`, `quantidade`, `Cliente_idcliente`) VALUES ('222222', '7', '1', '2');
INSERT INTO `compra` (`cod_compra`, `produto_idproduto`, `quantidade`, `Cliente_idcliente`) VALUES ('222222', '8', '1', '2');
INSERT INTO `compra` (`cod_compra`, `produto_idproduto`, `quantidade`, `Cliente_idcliente`) VALUES ('222222', '9', '1', '2');
INSERT INTO `compra` (`cod_compra`, `produto_idproduto`, `quantidade`, `Cliente_idcliente`) VALUES ('222222', '10', '1', '2');

INSERT INTO `compra` (`cod_compra`, `produto_idproduto`, `quantidade`, `Cliente_idcliente`) VALUES ('333333', '11', '1', '3');
INSERT INTO `compra` (`cod_compra`, `produto_idproduto`, `quantidade`, `Cliente_idcliente`) VALUES ('333333', '12', '1', '3');
INSERT INTO `compra` (`cod_compra`, `produto_idproduto`, `quantidade`, `Cliente_idcliente`) VALUES ('333333', '13', '1', '3');
INSERT INTO `compra` (`cod_compra`, `produto_idproduto`, `quantidade`, `Cliente_idcliente`) VALUES ('333333', '14', '1', '3');
INSERT INTO `compra` (`cod_compra`, `produto_idproduto`, `quantidade`, `Cliente_idcliente`) VALUES ('333333', '15', '1', '3');

INSERT INTO `compra` (`cod_compra`, `produto_idproduto`, `quantidade`, `Cliente_idcliente`) VALUES ('444444', '16', '1', '4');
INSERT INTO `compra` (`cod_compra`, `produto_idproduto`, `quantidade`, `Cliente_idcliente`) VALUES ('444444', '17', '1', '4');
INSERT INTO `compra` (`cod_compra`, `produto_idproduto`, `quantidade`, `Cliente_idcliente`) VALUES ('444444', '18', '1', '4');
INSERT INTO `compra` (`cod_compra`, `produto_idproduto`, `quantidade`, `Cliente_idcliente`) VALUES ('444444', '19', '1', '4');
INSERT INTO `compra` (`cod_compra`, `produto_idproduto`, `quantidade`, `Cliente_idcliente`) VALUES ('444444', '20', '1', '4');

INSERT INTO `compra` (`cod_compra`, `produto_idproduto`, `quantidade`, `Cliente_idcliente`) VALUES ('555555', '21', '1', '5');
INSERT INTO `compra` (`cod_compra`, `produto_idproduto`, `quantidade`, `Cliente_idcliente`) VALUES ('555555', '22', '1', '5');
INSERT INTO `compra` (`cod_compra`, `produto_idproduto`, `quantidade`, `Cliente_idcliente`) VALUES ('555555', '23', '1', '5');
INSERT INTO `compra` (`cod_compra`, `produto_idproduto`, `quantidade`, `Cliente_idcliente`) VALUES ('555555', '24', '1', '5');
INSERT INTO `compra` (`cod_compra`, `produto_idproduto`, `quantidade`, `Cliente_idcliente`) VALUES ('555555', '25', '1', '5');




