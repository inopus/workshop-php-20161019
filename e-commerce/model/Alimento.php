<?php
require_once 'Produto.php';

class Alimento extends Produto{
	private $dataValidade; // formato aaaa-mm-dd hh:mm:ss
    private $temperatura;
    
    function __construct($dataValidade, $temperatura){
		$this->dataValidade = $dataValidade;
        $this->temperatura = $temperatura;
	}
    
    function isValid (){
        if(time() <= strtotime($this->getDataValidade()))
            return true;
        else 
            return false;
	}
    
    function getDataValidade(){
        return $this->dataValidade;
    }
    
    function setDataValidade($dataValidade){
        $this->dataValidade = $dataValidade;
    }
    
    function getTemperatura(){
        return $this->temperatura;
    }
    
    function setTemperatura($temperatura){
        $this->temperatura = $temperatura;
    }
}