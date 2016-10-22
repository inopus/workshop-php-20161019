<?php
require_once 'model/Eletronico.php';
require_once 'model/Alimento.php';

$eletronico = new Eletronico(0, 'Computador', 20, 2, 'Eletronico', 'http://mictecinformatica.com/wp-content/uploads/2013/02/computadores.jpg', 'BIVOLT', true);

echo 'Nome:' . $eletronico->getNome() . '</br>'; 
echo 'Estoque:' . $eletronico->getQtdEstoque() . '</br>';
echo 'Preço:' . $eletronico->getPreco() . '</br>';
echo 'Categoria:' . $eletronico->getCategoria() . '</br>';
echo 'Imagem:' . $eletronico->getImagem() . '</br>';
echo 'Bivolt:' . $eletronico->isBivolt() . '</br></br></br></br>';


$alimento = new Alimento(0, 'Laranjas', 20, 2, 'Frutas', 'http://www.remedio-caseiro.com/wp-content/uploads/2014/02/laranja-300x266.jpg', '2016-10-25', '21');

echo 'Nome:' . $alimento->getNome() . '</br>'; 
echo 'Estoque:' . $alimento->getQtdEstoque() . '</br>';
echo 'Preço:' . $alimento->getPreco() . '</br>';
echo 'Categoria:' . $alimento->getCategoria() . '</br>';
echo 'Imagem:' . $alimento->getImagem() . '</br>';
echo 'Data de validade:' . $alimento->getDataValidade() . '</br>';
echo 'Válido:' . $alimento->isValid() . '</br>';