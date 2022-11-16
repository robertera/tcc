<?php


return [
    /*
    |--------------------------------------------------------------------------
    | Traduções em Portugues Brasileiro para o painel de erros
    |--------------------------------------------------------------------------
    */
    // Source: https://httpstatuses.com
    '403' => [
        'title'       => '403 - Forbidden',
        'description' => 'O servidor entendeu a solicitação, mas se recusa a autorizá-la.',
    ],
    '404' => [
        'title'       => '404 - Not Found',
        'description' => 'O servidor de origem não encontrou uma representação atual para o recurso de destino ou não está disposto a divulgar que existe uma.',
    ],
    '500' => [
        'title'       => '500 - Internal Server Error',
        'description' => 'O servidor encontrou uma condição inesperada que o impediu de atender à solicitação.',
    ],
    '503' => [
        'title'        => '503 - Service Unavailable',
        'description'  => 'No momento, o servidor não consegue lidar com a solicitação devido a uma sobrecarga temporária ou manutenção programada, que provavelmente será aliviada após algum atraso.',
    ]
];
