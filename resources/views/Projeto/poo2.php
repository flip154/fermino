<?php
    
    abstract class Maquina{
        public $nome;
        private $producao;

        public function __construct($nome)
        {
            $this->nome = $nome;
            $this->producao = 0;
        }

        public function getProducao(){
            return $this->producao;
        }

        public function registrarProduto(){
            if($quantidade <= 0){
                return false;
            }
            $this->producao += $quantidade;
                return true;
        }
    }
    
    
?>