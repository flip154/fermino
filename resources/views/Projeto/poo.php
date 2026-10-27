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
    
?>