<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <?php
    $nome = "";
    $idade = "";
    $resultado = "";
    

    if($idade >= 18){
        $resultado = "maior";
    }
    else if($idade <= 0){
        $resultado = "idade invalida";
    }
    else{
        $resultado = "menor";
    }
    ?>
    <html>
        <div class="container">
            <form action="Get/Post" method="get">
                <input type="text" id="nome" name="nome" required>
                <input type="number" id="idade" name="idade" required>
                <button type="submit">enviar</button>
            </form>
            <h1>nome: <?= $nome ?></h1>
            <p>idade: <?= $idade ?></p>
            <p>voce é <?= $resultado ?> de idade</p>
        </div>
    </html>
</body>
</html>