CREATE TABLE IF NOT EXISTS `controleEstoque`.`USUARIO` (
  `id_usuario_usu` INT(11) NOT NULL AUTO_INCREMENT,
  `st_nome_usu` VARCHAR(255) NOT NULL,
  `st_login_usu` VARCHAR(255) NOT NULL,
  `st_senha_usu` VARCHAR(255) NOT NULL,
  `st_email_usu` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id_usuario_usu`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8

CREATE TABLE IF NOT EXISTS `controleEstoque`.`PRODUTO` (
  `id_produto_prd` INT(11) NOT NULL AUTO_INCREMENT,
  `st_codigo_prd` VARCHAR(255) NOT NULL,
  `st_nome_prd` VARCHAR(255) NOT NULL,
  `vl_compra_prd` DOUBLE NOT NULL,
  `vl_venda_prd` DOUBLE NOT NULL,
  `qnt_minima_prd` DOUBLE NULL DEFAULT NULL,
  `qnt_maxima_prd` DOUBLE NULL DEFAULT NULL,
  `id_categoria_cat` INT(11) NOT NULL,
  `id_marca_mar` INT(11) NOT NULL,
  `id_unidade_medida_uni` INT(11) NOT NULL,
  `id_fornecedor_for` INT(11) NOT NULL,
  `id_usuario_usu` INT(11) NOT NULL,
  PRIMARY KEY (`id_produto_prd`),
  INDEX `fk_PRODUTOS_CATEGORIAS1_idx` (`id_categoria_cat` ASC),
  INDEX `fk_PRODUTOS_MARCAS1_idx` (`id_marca_mar` ASC),
  INDEX `fk_PRODUTOS_UNIDADE_MEDIDA1_idx` (`id_unidade_medida_uni` ASC),
  INDEX `fk_PRODUTOS_FORNECEDORES1_idx` (`id_fornecedor_for` ASC),
  INDEX `fk_PRODUTOS_USUARIO1_idx` (`id_usuario_usu` ASC),
  CONSTRAINT `fk_PRODUTOS_CATEGORIAS1`
    FOREIGN KEY (`id_categoria_cat`)
    REFERENCES `controleEstoque`.`CATEGORIA` (`id_categoria_cat`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PRODUTOS_MARCAS1`
    FOREIGN KEY (`id_marca_mar`)
    REFERENCES `controleEstoque`.`MARCA` (`id_marca_mar`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PRODUTOS_UNIDADE_MEDIDA1`
    FOREIGN KEY (`id_unidade_medida_uni`)
    REFERENCES `controleEstoque`.`UNIDADE_MEDIDA` (`id_unidade_medida_uni`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PRODUTOS_FORNECEDORES1`
    FOREIGN KEY (`id_fornecedor_for`)
    REFERENCES `controleEstoque`.`FORNECEDOR` (`id_fornecedor_for`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PRODUTOS_USUARIO1`
    FOREIGN KEY (`id_usuario_usu`)
    REFERENCES `controleEstoque`.`USUARIO` (`id_usuario_usu`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8

CREATE TABLE IF NOT EXISTS `controleEstoque`.`CATEGORIA` (
  `id_categoria_cat` INT(11) NOT NULL AUTO_INCREMENT,
  `st_nome_cat` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id_categoria_cat`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8

CREATE TABLE IF NOT EXISTS `controleEstoque`.`UNIDADE_MEDIDA` (
  `id_unidade_medida_uni` INT(11) NOT NULL AUTO_INCREMENT,
  `st_nome_uni` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id_unidade_medida_uni`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8

CREATE TABLE IF NOT EXISTS `controleEstoque`.`FORNECEDOR` (
  `id_fornecedor_for` INT(11) NOT NULL AUTO_INCREMENT,
  `st_razao_social_for` VARCHAR(155) NOT NULL,
  `st_nome_fantasia_for` VARCHAR(155) NULL DEFAULT NULL,
  `st_cpf_for` VARCHAR(20) NULL DEFAULT NULL,
  `st_cnpj_for` VARCHAR(20) NULL DEFAULT NULL,
  `st_site_for` VARCHAR(100) NULL DEFAULT NULL,
  `st_telefone_for` VARCHAR(45) NULL DEFAULT NULL,
  `st_email_for` VARCHAR(45) NULL DEFAULT NULL,
  `id_endereco_end` INT(11) NOT NULL,
  PRIMARY KEY (`id_fornecedor_for`),
  INDEX `fk_FORNECEDORES_ENDERECO1_idx` (`id_endereco_end` ASC),
  CONSTRAINT `fk_FORNECEDORES_ENDERECO1`
    FOREIGN KEY (`id_endereco_end`)
    REFERENCES `controleEstoque`.`ENDERECO` (`id_endereco_end`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8

CREATE TABLE IF NOT EXISTS `controleEstoque`.`EMPRESA` (
  `id_empresa_emp` INT(11) NOT NULL AUTO_INCREMENT,
  `st_razao_social_emp` VARCHAR(155) NOT NULL,
  `st_nome_fantasia_emp` VARCHAR(155) NULL DEFAULT NULL,
  `st_cpf_emp` VARCHAR(20) NULL DEFAULT NULL,
  `st_cnpj_emp` VARCHAR(20) NULL DEFAULT NULL,
  `st_email_emp` VARCHAR(45) NULL DEFAULT NULL,
  `st_telefone_emp` INT(11) NULL DEFAULT NULL,
  `id_endereco_end` INT(11) NOT NULL,
  PRIMARY KEY (`id_empresa_emp`),
  INDEX `fk_EMPRESAS_ENDERECO1_idx` (`id_endereco_end` ASC),
  CONSTRAINT `fk_EMPRESAS_ENDERECO1`
    FOREIGN KEY (`id_endereco_end`)
    REFERENCES `controleEstoque`.`ENDERECO` (`id_endereco_end`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8

CREATE TABLE IF NOT EXISTS `controleEstoque`.`ENDERECO` (
  `id_endereco_end` INT(11) NOT NULL AUTO_INCREMENT,
  `st_rua_end` VARCHAR(50) NOT NULL,
  `st_bairro_end` VARCHAR(50) NOT NULL,
  `st_cidade_end` VARCHAR(50) NOT NULL,
  `st_cep_end` VARCHAR(15) NOT NULL,
  `st_numero_end` VARCHAR(20) NOT NULL,
  `st_complemento_end` VARCHAR(30) NOT NULL,
  `id_estado_est` INT(11) NOT NULL,
  PRIMARY KEY (`id_endereco_end`),
  INDEX `fk_ENDERECO_ESTADOS_idx` (`id_estado_est` ASC),
  CONSTRAINT `fk_ENDERECO_ESTADOS`
    FOREIGN KEY (`id_estado_est`)
    REFERENCES `controleEstoque`.`ESTADO` (`id_estado_est`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8

CREATE TABLE IF NOT EXISTS `controleEstoque`.`ESTADO` (
  `id_estado_est` INT(11) NOT NULL AUTO_INCREMENT,
  `st_nome_est` VARCHAR(60) NOT NULL,
  `st_sigla_est` VARCHAR(4) NOT NULL,
  PRIMARY KEY (`id_estado_est`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8

CREATE TABLE IF NOT EXISTS `controleEstoque`.`ESTOQUE` (
  `id_estoque_est` INT(11) NOT NULL,
  `qnt_estoque_est` VARCHAR(45) NOT NULL,
  `id_produto_prd` INT(11) NOT NULL,
  PRIMARY KEY (`id_estoque_est`, `id_produto_prd`),
  INDEX `fk_ESTOQUE_PRODUTOS1_idx` (`id_produto_prd` ASC),
  CONSTRAINT `fk_ESTOQUE_PRODUTOS1`
    FOREIGN KEY (`id_produto_prd`)
    REFERENCES `controleEstoque`.`PRODUTO` (`id_produto_prd`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8

CREATE TABLE IF NOT EXISTS `controleEstoque`.`MARCA` (
  `id_marca_mar` INT(11) NOT NULL AUTO_INCREMENT,
  `st_nome_mar` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_marca_mar`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8

CREATE TABLE IF NOT EXISTS `controleEstoque`.`COMPRA` (
  `id_compra_com` INT(11) NOT NULL,
  `id_usuario_usu` INT(11) NOT NULL,
  PRIMARY KEY (`id_compra_com`),
  INDEX `fk_COMPRA_USUARIO1_idx` (`id_usuario_usu` ASC),
  CONSTRAINT `fk_COMPRA_USUARIO1`
    FOREIGN KEY (`id_usuario_usu`)
    REFERENCES `controleEstoque`.`USUARIO` (`id_usuario_usu`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
