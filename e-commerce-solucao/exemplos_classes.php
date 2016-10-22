<?php
require_once 'model/Produto.php';

$produto = new Produto('Teste', 20, 2, 'Especial');

echo $produto->valorEstoque();

?>