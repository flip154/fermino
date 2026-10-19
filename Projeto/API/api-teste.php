<?php 
    header('Content-Type: application/json; charset=utf-8');

    $metodo = $_SERVER['REQUEST_METHOD'];
    
    $chamados = [
        [
            "id" => 1,
            "titulo" => "Computador Sem Internet"
        ],
        [
            "id" => 2,
            "titulo" => "Impressora Não Funciona"
        ]
    ];

    if ($metodo === 'GET') {
        http_response_code(200);

        echo json_encode($chamados, JSON_UNESCAPED_UNICODE);

        exit;
    } ;

    if ($metodo === 'POST'){
        $conteudo = file_get_contents('php://input');

        $dados = json_decode($conteudo,true);

        if(!is_array(($dados) || !isset($dados['titulo']) || !isset($dados['titulo']) || !is_string($dados['titulo']) || trim($dados['titulo']) === '')) {

            http_response_code(400);

            echo json_encode(["Erro" => "Titulo Obrigatorio"]);
        };

        $novoChamado = [
            "id" => 3,
            "titulo" => trim($dados['titulo'])
        ];

        http_response_code(201);

        echo json_encode($novoChamado, JSON_UNESCAPED_UNICODE);

        exit;
    };

    header('Allow: GET, POST');

    http_response_code(405);
?>