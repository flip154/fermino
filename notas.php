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
         $requisito_media = 7;
         $media_faltante = 0;
         $media = 0;
         $nota_final = 0;

    
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $nome = $_POST["nome"];
            $idade = $_POST["idade"];
            $nota1 = $_POST["nota1"];
            $nota2 = $_POST["nota2"];
            $nota3 = $_POST["nota3"];
            $nota4 = $_POST["nota4"];
            $nota5 = $_POST["nota5"];
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

        $media_faltante = $nota_final - $requisito_media;


        

        if($nota1 and $nota2 and $nota3 and $nota4 and $nota5 < 0){
            echo "Nota Invalida";
        }

        elseif($nota1 and $nota2 and $nota3 and $nota4 and $nota5 > 10){
           echo "nota invalida";
        }

        if($idade <= 0){
            $idade = "Idade Invalida";
        }

        if($nota_final >= 70){
            $media = "aprovado";
        }

        elseif($nota_final == 100){
            $media = "Aprovado com Excelencia";
        }

        elseif($nota_final >= 50 and $nota_final < 70){
            $media = "RECUPERAÇÃO";
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
            <form method="POST">
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
                    <?= $media ?>
                    <?= $media_faltante ?> </p>
            
            <?php } ?> 
            </div>
        </html>

        </body>
        </html>