<?php
    $tblProdutos = $db->prepare("
        CREATE TABLE IF NOT EXISTS Produtos
        (
            id INT NOT NULL AUTO_INCREMENT,
            nome VARCHAR(255),
            qtdEstoque VARCHAR(255),
            preco VARCHAR(255),
            categoria VARCHAR(255),
            imagem VARCHAR(255),
            PRIMARY KEY (ID)
        );");

    $tblProdutos->execute();