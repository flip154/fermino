<?php 

$user = "administrador";
$senha = 12345;


if($user != "administrador"){
    $user = "Usuario errado, tente novamente";
}
else{
    $user = "Usuario correto";
}

if($senha != 12345){
    $user = "Senha errada, tente novamente";
}
else{
    $user = "Senha correta";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container" >
        <form method="POST">
            <input type="text" id="user" name="user" required>
            <p></p>
            <input type="number" id="senha" name="senha" required>
            <p></p>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>