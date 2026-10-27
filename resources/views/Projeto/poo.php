<?php 
    // progranação orientada a objetos / P = progranação; O = orientada; O = objetos

    class Personagem{
        public $nome;
        public $vida = 100;

        public function atacar(){
            echo "$this -> nome realizou um ataque!";
        }
    }

    $personagem1 = new Personagem();
    $personagem1->nome = "Felipe";
    $personagem1->atacar();

    class Personagen{
        public $nome;
        public $vida;
        public $dano;

        public function __construct($nome, $vida, $dano)
        {
            $this->nome = $nome;
            $this->vida = $vida;
            $this->dano = $dano;
            
        } 

        public function atacar(){
            echo "$this->nome realizou um ataque!";
        }
            
        
    }

    $personagem = new Personagen("Felipe", 150, 12);
    $personagem1 = new Personagen("Thiago", 250, 8);
    $personagem2 = new Personagen("Bozze", 100, 20);
    
?>