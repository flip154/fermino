<?php
    
    // Classe abstrata:
    abstract class Maquina{
        public $nome;
        private $producao;

        public function __construct($nome)
        {
            $this->nome = $nome;
            $this->producao = 0;
        }

        // Encapsulamento - Getter
        public function getProducao(){
            return $this->producao;
        }

        // Encapsulamento - Alteração Controlada
            public function registrarProduto($quantidade){
            if($quantidade <= 0){
                return false;
            }
            $this->producao += $quantidade;
                return true;
        }

        //Abstração
        abstract public function operar();
    }

    // Herança
    class Esteira extends Maquina{
        public function operar(){  
            return "Transportando peças...";
        }
    }

    class Prensa extends Maquina{
        public function operar(){  
            return "Prensando peças...";
        }
    }

    class RoboSoldagem extends Maquina{
        public function operar(){  
            return "Soldando peças...";
        }
    }

    // Sessão Armazenamento Temporario
        if(!isset($_SESSION["maquinas"])){
            $_SESSION["maquinas"] = [];
        }

        $mensagem = "";
    
        if($_SERVER["REQUEST_METHOD"] === "POST"){
            $nome = $_POST["nome"] ?? "";
            $tipo = $_POST["tipo"] ?? "";
            $quantidade = $_POST["quantidade"] ?? null;

            if(
                $nome === "" || 
                $quantidade === false ||
                $quantidade <= 0
            ){
                $mensagem = "Preencha todos os campos Corretamente!";
            }
            else{
                if($tipo === "esteira"){
                    $maquina = new Esteira($nome);
                }

                elseif($tipo === "prensa"){
                    $maquina = new Prensa($nome);
                }

                elseif($tipo === "roboSoldagem"){
                    $maquina = new RoboSoldagem($nome);
                }

                $maquina->registrarProduto($quantidade);

                $_SESSION["maquinas"][] = $maquina;

                $mensagem = "Maquina Cadastrada com Sucesso";
            }
        }

        function escapar($texto){
            return htmlspecialchars(
                (string) $texto,
                ENT_QUOTES,
                "UTF-8");
        }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../../css/poo.css">
    <title>Cadastro de Maquina</title>
</head>
<body>
    <div class="container">
        <form method="$_POST">
            <p>
            <input type="text" id="nomeMaquina" name="nomeMaquina">
            <input type="text" id="tipoMaquina" name="tipoMaquina">
            <input type="number" id="quantidadeMaquina" name="quantidadeMaquina">
            </p>

            <p>
                <button type="submit"> Cadastrar Maquina </button>
            </p>
        </form>
<p>
        <?php 
            
        ?>
</p>
    </div>
</body>
</html>