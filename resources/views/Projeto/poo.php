<?php 
    // progranação orientada a objetos / P = progranação; O = orientada; O = objetos

    class Personagem{
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

    $personagem = new Personagem("Felipe", 150, 12);
    $personagem1 = new Personagem("Thiago", 250, 8);
    $personagem2 = new Personagem("Bozze", 100, 20);

    $personagem->atacar();

    class Guerreiro extends Personagem{
        public function defender(){
            echo "$this->nome Levantou o escudo";
        }
    }

    $gurreiro = new Guerreiro("personagem", 100, 10);

    $guerreiro->atacar(); // metodo herdado
    $guerreiro->defender(); //metodo proprio
    
?>