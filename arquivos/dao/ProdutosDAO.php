<?php 
class ProdutosDAO{
    function listaProdutos(){
        global $db;
        if(isset($db)){
            $q = $db->prepare("SELECT * FROM Produtos;");
            if($q->execute()) {
                $produtos = array();
                $linhas = $q->fetchAll(PDO::FETCH_BOTH);
                foreach($linhas as $linha) {
                    $produto = new Produto($linha["id"], $linha["nome"], $linha["qtdEstoque"], $linha["preco"], $linha["categoria"], $linha["imagem"]);
                    array_push($produtos, $produto);
                }
                return $produtos;
            }
        }
    }

    function retornaProduto($id){
        global $db;
        if(isset($db)){
            $q = $db->prepare("SELECT * FROM Produtos where id = :id;");
            $q->bindValue(":id", $id, PDO::PARAM_INT);
            if($q->execute()) {
                $linha = $q->fetchAll(PDO::FETCH_BOTH);
                $produto = new Produto($linha[0]["id"], $linha[0]["nome"], $linha[0]["qtdEstoque"], $linha[0]["preco"], $linha[0]["categoria"], $linha[0]["imagem"]);
                return $produto;
            }
        }
    }
}