<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nome="Fermino";
    $idade=18;
    if($idade >= 18){
    echo "Maior de idade";
    }
    else{
        echo "Menor de idade";
    }
    ?>
    <html>
        <h1><?= $nome ?>$</h1>
        <p>idade: <?= $idade ?></p>
        <p></p>
    </html>
</body>
</html>