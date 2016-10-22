<?php
class Produto{
    private $id;
	private $nome;
	private $qtdEstoque;
	private $preco;
    private $categoria;
    private $imagem;
    
	function __construct($id, $nome, $qtdEstoque, $preco, $categoria, $imagem){
		$this->id = $id;
        $this->nome = $nome;
        $this->qtdEstoque = $qtdEstoque;
        $this->preco = $preco;
        $this->categoria = $categoria;
        $this->imagem = $imagem;
	}
    
    function valorEstoque(){
        $total = $this->qtdEstoque * $this->preco;
        return $total;
    }

    
    function setId($id){
        $this->id = $id;
    }
    
    function getId(){
        return $this->id;
    }
    
    function setNome($nome){
        $this->nome = $nome;
    }
    
    function getNome(){ 
        return $this->nome;
    }
    
    function setQtdEstoque($qtdEstoque){
        $this->qtdEstoque = $qtdEstoque;
    }
    
    function getQtdEstoque(){
        return $this->qtdEstoque;
    }
    
    function setPreco($preco){
        $this->preco = $preco;
    }
    
    function getPreco(){
        return $this->preco;
    }
    
    function setCategoria($categoria){
        $this->categoria = $categoria;
    }
    
    function getCategoria(){
        return $this->categoria;
    }

    function setImagem($imagem){
        $this->imagem = $imagem;
    }
    
    function getImagem(){
        return $this->imagem;
    }
    

}