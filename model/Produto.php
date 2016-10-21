<?php
class Produto{
	private $nome;
	private $qtdEstoque;
	private $preco;
    private $categoria;
    private $imagem;
    
	function __construct($nome, $qtdEstoque, $preco, $categoria){
		$this->nome = $nome;
        $this->qtdEstoque = $qtdEstoque;
        $this->preco = $preco;
        $this->categoria = $categoria;
	}
    
    function setNome($nome){
        return $this->nome = $nome;
    }
    
    function getNome(){ 
        return $this->nome;
    }
    
    function setQtdEstoque($qtdEstoque){
        return $this->qtdEstoque = $qtdEstoque;
    }
    
    function getQtdEstoque(){
        return $this->qtdEstoque;
    }
    
    function setPreco($preco){
        return $this->preco = $preco;
    }
    
    function getPreco(){
        return $this->preco;
    }
    
    function setCategoria($categoria){
        return $this->categoria = $categoria;
    }
    
    function getCategoria(){
        return $this->categoria;
    }

    function setImagem($imagem){
        return $this->imagem = $imagem;
    }
    
    function getImagem(){
        return $this->imagem;
    }
    
    function valorEstoque(){
        $total = $this->qtdEstoque * $this->preco;
        return $total;
    }

} ?>