CREATE database db_loja;

USE db_loja;

CREATE TABLE produtos (
    produto_id int unsigned auto_increment primary key,
    status BOOLEAN,
    nome varchar(80) not null,
    preco varchar(10),
    descricao VARCHAR(50),
    imagem VARCHAR(50)
);


INSERT INTO `db_loja`.`produtos` (`nome`, `preco`, `descricao`, `imagem`, `status`) VALUES ('Heineken - Garrafa', '7.45', 'Marca: Heineken', 'produto-1.jpg', '0');
INSERT INTO `db_loja`.`produtos` (`nome`, `preco`, `descricao`, `imagem`, `status`) VALUES ('Heineken Premium Lager - Barril', '40.00', 'Marca: Heineken', 'produto-2.jpg', '0');
INSERT INTO `db_loja`.`produtos` (`nome`, `preco`, `descricao`, `imagem`, `status`) VALUES ('Heineken Premium Lager - Lata', '2.45', 'Marca: Heineken', 'produto-3.jpg', '0');
