<?php
require_once 'Produto.php';

class Alimento extends Produto{
	private $dataValidade;
    private $temperatura;
    
    function __constructor($dataValidade, $temperatura){
		$this->dataValidade = $dataValidade;
        $this->temperatura = $temperatura;
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
	
	function verificaValidade (){
	}

}

?>