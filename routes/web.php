<?php 

    require_once __DIR__ . '/../app/Http/Controllers/HelpdeskController.php';    

    return[
        'GET' =>[
            'portifolio' => [new HelpdeskController(), 'index'],
            'helpdesk' => [new HelpdeskController(), 'index'],
            'jogos' => [new HelpdeskController(), 'jogos'],
            'login' => [new HelpdeskController(), 'login'],
            'notas' => [new HelpdeskController(), 'notas'],
            'idade' => [new HelpdeskController(), 'idade']
        ],
            'POST' => [
                'helpdesk' => []
            ]
            
            ];
?>