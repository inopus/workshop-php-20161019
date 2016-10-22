<?php
require_once 'model/Produto.php';

$produto = new Produto(0, 'Teste', 20, 2, 'Especial', 'http://mictecinformatica.com/wp-content/uploads/2013/02/computadores.jpg');

echo $produto->valorEstoque();