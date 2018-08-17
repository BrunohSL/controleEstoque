-- Feito para testar cadastro de produtos --
-- Retirando NOT NULL das colunas --
-- categoria, fornecedor, marcas, unidade_medida, usuario --
-- Adicionado NOT NULL nas colunas quantidade maxima e minima --
ALTER TABLE `controleEstoque`.`produto` 
DROP FOREIGN KEY `fk_PRODUTOS_CATEGORIAS1`,
DROP FOREIGN KEY `fk_PRODUTOS_FORNECEDORES1`,
DROP FOREIGN KEY `fk_PRODUTOS_MARCAS1`,
DROP FOREIGN KEY `fk_PRODUTOS_UNIDADE_MEDIDA1`,
DROP FOREIGN KEY `fk_PRODUTOS_USUARIO1`;
ALTER TABLE `controleEstoque`.`produto` 
CHANGE COLUMN `qnt_minima_prd` `qnt_minima_prd` DOUBLE NOT NULL ,
CHANGE COLUMN `qnt_maxima_prd` `qnt_maxima_prd` DOUBLE NOT NULL ,
CHANGE COLUMN `id_categoria_cat` `id_categoria_cat` INT(11) NULL ,
CHANGE COLUMN `id_marca_mar` `id_marca_mar` INT(11) NULL ,
CHANGE COLUMN `id_unidade_medida_uni` `id_unidade_medida_uni` INT(11) NULL ,
CHANGE COLUMN `id_fornecedor_for` `id_fornecedor_for` INT(11) NULL ,
CHANGE COLUMN `id_usuario_usu` `id_usuario_usu` INT(11) NULL ;
ALTER TABLE `controleEstoque`.`produto` 
ADD CONSTRAINT `fk_PRODUTOS_CATEGORIAS1`
  FOREIGN KEY (`id_categoria_cat`)
  REFERENCES `controleEstoque`.`categoria` (`id_categoria_cat`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_PRODUTOS_FORNECEDORES1`
  FOREIGN KEY (`id_fornecedor_for`)
  REFERENCES `controleEstoque`.`fornecedor` (`id_fornecedor_for`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_PRODUTOS_MARCAS1`
  FOREIGN KEY (`id_marca_mar`)
  REFERENCES `controleEstoque`.`marca` (`id_marca_mar`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_PRODUTOS_UNIDADE_MEDIDA1`
  FOREIGN KEY (`id_unidade_medida_uni`)
  REFERENCES `controleEstoque`.`unidade_medida` (`id_unidade_medida_uni`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_PRODUTOS_USUARIO1`
  FOREIGN KEY (`id_usuario_usu`)
  REFERENCES `controleEstoque`.`usuario` (`id_usuario_usu`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;
