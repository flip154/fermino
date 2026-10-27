<?php 
    // progranação orientada a objetos / P = progranação; O = orientada; O = objetos

    //Programação orientada a objetos//

    // ENCAPSULAMENTO
    // Proteger informações para que não sejam alteradas de qualquer jeito.

    // HERANÇA
    // Criar uma classe nova aproveitando características de outra.

    // POLIMORFISMO
    // Permitir que objetos diferentes respondam à mesma ação de maneiras diferentes.

    // ABSTRAÇÃO
    // Mostrar o que é necessário e esconder detalhes complicados de funcionamento.

    // Exemplo com POO


    class Personagem{
        public string $nome;
        private int $vida;
        public int $dano;

        public function __construct($nome, $vida, $dano)
        {
            $this->nome = $nome;
            $this->vida = $vida;
            $this->dano = $dano;
            
        } 

        public function getVida(){
            return $this->vida;
        }

        public function setVida($vida){
            $this->vida = $vida;
            if($this->vida <= 0 || $this->vida == 0){
                echo "$this->nome morreu!\n";
            }
        }

        public function atacar(){
            echo "$this->nome realizou um ataque!\n";
        }
    }

    $lucio = new Personagem("Lúcio", 170, 15);

    $lucio->atacar();

    $lucio->setVida(50);

    $darius = new Personagem("Darius", 250, 13);
    $goat = new Personagem("Billy", 300, 10);

    $personagens = [$lucio, $darius, $goat];

    foreach($personagens as $p){
        $p->atacar();
    }

    class Guerreiro extends Personagem{
        public function defender(){
            echo "$this->nome Levantou o escudo\n";
            return;
        }
        public function atacar(){
            echo "$this->nome realizou um Golpe de Lança!\n";
        }
    }

    $gurreiro = new Guerreiro("Darius", 100, 10);

    $guerreiro->atacar(); // metodo herdado
    $guerreiro->defender(); //metodo proprio

    class Mago extends Personagem{
        public function atacar(){
            echo "$this->nome realizou um Lançou uma Estaca de Gelo!\n";
        }
    }

    $mago = new Mago("Lúcio", 150, 20);

    $mago->atacar(); // metodo herdado
    

    // 1. o que e uma classe?
    // um molde para criar objetos

    // 2 o que  signifca  new  personagem()?
    // criar  um objeto da classe personagem

    // 3 para quer serve $this->nome?
    // acessar op nome  do objeto  atual

    // 4. oque significa extends?
    // herdar caracteristicas e  metados  de outra classe


    // https://felipef315.devlook.xyz/resources/views/Projeto/poo.php
    
?>