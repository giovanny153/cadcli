--Table structure for table `gml_lancamentos`--  
 
 CREATE TABLE IF NOT EXISTS `gml_lancamentos` (  
  `id` int(11) NOT NULL AUTO_INCREMENT,  
  `descricao` varchar(50) NOT NULL,  
  `data` date NOT NULL,  
  `conta` varchar(100) NOT NULL,  
  `categoria` varchar(100) NOT NULL,  
  `pagamento` varchar(100) NOT NULL,  
  `valor` decimal(100) NOT NULL,  
  PRIMARY KEY (`id`)  
 ) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=187 ;  
 --  
 -- Dumping data for table `gml_lancamentos`  
 --  
 INSERT INTO `gml_lancamentos` (`id`, `descricao`,`data`, `conta`, `categoria`, `pagamento`, `valor`) VALUES  
 (1, ), 

-- script de base feita convertida no site https://sqlizer.io
 CREATE TABLE IF NOT EXISTS financeiro (
    `id` INT,
    `descricao` VARCHAR(12) CHARACTER SET utf8,
    `data` DATETIME,
    `conta` VARCHAR(9) CHARACTER SET utf8,
    `categoria` VARCHAR(6) CHARACTER SET utf8,
    `pagamento` VARCHAR(8) CHARACTER SET utf8,
    `valor` NUMERIC(5, 2),
    PRIMARY KEY (`id`)
);
INSERT INTO financeiro VALUES
    (1,'Burguer King','2018-05-01 00:00:00','Santander','Comida','Débito',30),
    (2,'Subway','2018-05-01 00:00:00','Nubank','Comida','Dinheiro',35.74),
    (3,'Mc Donalds','2018-05-01 00:00:00','Nubank','Comida','Débito',25.13),
    (4,'Burguer King','2018-05-03 00:00:00','Nubank','Comida','Crédito',25.1),
    (5,'Shopping','2018-05-03 00:00:00','Santander','Comida','Crédito',352.69),
    (6,'Outback','2018-05-08 00:00:00','Santander','Comida','Débito',143.25),
    (7,'Dafiti','2018-05-08 00:00:00','Santander','Roupa','Débito',95.14),
    (8,'Aramis','2018-05-08 00:00:00','Nubank','Roupa','Crédito',154.25),
    (9,'Torra torra','2018-05-08 00:00:00','Nubank','Roupa','Dinheiro',10.35);