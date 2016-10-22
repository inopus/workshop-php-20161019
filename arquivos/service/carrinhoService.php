<?php
    require_once '../config.php';

    $produtoId = $_GET["id"];
    $produtosDAO = new ProdutosDAO();

    $produto = $produtosDAO->retornaProduto($produtoId);

    echo $produto->getNome();
    
    if(isset($_SESSION["carrinho"])){
        array_push($_SESSION["carrinho"], $produto);
        
    }else{
        $_SESSION["carrinho"] = array();
    }
    
    header('Location: ../index.php?return=true');