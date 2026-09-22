<?php
         $nome = "";
         $idade = 0;
         $nota1 = 0;
         $nota2 = 0;
         $nota3 = 0;
         $nota4 = 0;
         $nota5 = 0;
         $peso1 = 1;
         $peso2 = 2;
         $peso3 = 3;
         $resultado = "";
         $resultado1 = 0;
         $resultado2 = 0;
         $resultado3 = 0;
         $resultado4 = 0;
         $resultado5 = 0;
         $resultado_total = 0;
         $soma_peso = 0;
         $media = 0;
         $nota_final = 0;

    
        if($_SERVER["REQUEST_METHOD"]=="GET"){
            $nome = $_GET["nome"];
            $idade = $_GET["idade"];
            $nota1 = $_GET["nota1"];
            $nota2 = $_GET["nota2"];
            $nota3 = $_GET["nota3"];
            $nota4 = $_GET["nota4"];
            $nota5 = $_GET["nota5"];
            $nota_final = $_GET["nota_final"];
            $media = $_GET["media"];
        }

        $resultado1 = $nota1 * $peso2;
        $resultado2 = $nota2 * $peso3;
        $resultado3 =$nota3 * $peso1;
        $resultado4 = $nota4 * $peso1;
        $resultado5 = $nota5 * $peso3;
        
        $resultado_total = $resultado1 + $resultado2 + $resultado3 + $resultado4 + $resultado5;
        $soma_peso = $peso1 + $peso2 + $peso3 + $peso1 + $peso3;

        $media = $resultado_total / $soma_peso;
        $nota_final = $resultado_total / $soma_peso;

        if($nota_final >= 70){
            $media = "Aprovado";
        }
        elseif($nota_final >= 50 and $nota_final < 70){
            $media = "Recuperação";
        }
        else{
            $media = "Reprovado";
        }


?>
    <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="index.css">
            <title>Document</title>
        </head>
        <body>
            <div class="container" >
            <form method="GET">
                <input type="text" id="nome" name="nome" placeholder="NOME" required>
                <input type="number" id="idade" name="idade" placeholder="IDADE" required>
                <input type="number" id="nota1" name="nota1" required>
                <input type="number" id="nota2" name="nota2" required>
                <input type="number" id="nota3" name="nota3" required>
                <input type="number" id="nota4" name="nota4" required>
                <input type="number" id="nota5" name="nota5" required>
                <p></p>
                <button type="submit">Enviar Formulario</button>
            </form>
            <?php if($media != ""){ ?>
            
                <p><?= $nome ?>, 
                    <?= $idade ?>,
                    <?= $nota_final ?>,
                    <?= $media ?></p>
            
            <?php } ?> 
            </div>
        </html>

        </body>
        </html>