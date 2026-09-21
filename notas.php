<?php
         $nome = "";
         $idade = 0;
         $resultado = "";
    
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $nome = $_POST["nome"];
            $idade = $_POST["idade"];
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
                <input type="text" id="nome" name="nome" required>
                <input type="number" id="idade" name="idade" required>
                <input type="number" id="nota1" name="nota1" required>
                <input type="number" id="nota2" name="nota2" required>
                <input type="number" id="nota3" name="nota3" required>
                <input type="number" id="nota4" name="nota4" required>
                <input type="number" id="nota5" name="nota5" required>
                <button type="submit">enviar</button>
            </form>
            <?php if($resultado != ""){ ?>
            
                <h2> <?=  ?>, 
                 <?=   ?>
                  <?=   ?></h2>
            
            <?php } ?> 
            </div>
        </html>

        </body>
        </html>