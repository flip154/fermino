<?php

    $caminho = __DIR__ . "/dados.json";

    // abre e le o arquivo json
    $json = file_get_contents($caminho);

    // Transforma Json em array php
    $alunos = json_decode($json, true);

    // Criando aluno
    $novoAluno = [
        "nome" => $_POST["nome"],
        "idade" => $_POST["idade"],
        "curso" => $_POST["curso"]
    ];;

    if($_SERVER["REQUEST_METHOD"]=="POST"){


    // add o aluno a array 
    $alunos[] = $novoAluno;

    //  Transformar array em json
    $jsonAtualizado = json_encode($alunos,
        JSON_PRETTY_PRINT |
        JSON_UNESCAPED_UNICODE
    );

    // Salvar os dados no arquivo JSON

    file_put_contents($caminho, $jsonAtualizado);
    }

    echo "Dados Registrados em JSON";

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/json.css">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label>Nome: </label>
        <input type="text" name="nome" required>
        <label>Idade: </label>
        <input type="number" name="idade" required>
        <label>Curso: </label>
        <input type="text" name="curso" required>
        <button type="submit" class="botao"> Cadastrar </button>
        </form>


    <section id="resposta" class="resposta">
        <div class="card-resposta">
        <h2>ALUNOS CADASTRADOS</h2>
            <?php foreach($alunos as $aluno){?>
                <h3><?= $aluno["nome"] ?></h3>
                <p><?= $aluno["idade"] ?></p>
                <p><?= $aluno["curso"] ?></p>
            <?php }?>
        </div>
    </section>
</body>
</html>