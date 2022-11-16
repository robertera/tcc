<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Traduções em Portugues Brasileiro para o painel de recursos
    |--------------------------------------------------------------------------
    */

    'article' => [
        'create' => 'Criar artigo',
        'edit'   => 'Editar artigo',
        'fields' => [
            'category_id'  => 'Categoria',
            'content'      => 'Conteudo',
            'description'  => 'Descrição',
            'published_at' => 'Publicado em',
            'title'        => 'Titulo do artigo'
        ],
        'index'  => 'Artigos',
        'show'   => 'Mostrar artigo'
    ],
    'category' => [
        'create' => 'Criar categoria',
        'edit'   => 'Editar categoria',
        'fields' => [
            'article_count' => 'Contagem de artigos',
            'description'   => 'Descrição',
            'title'         => 'Titulo da Categoria'
        ],
        'index'  => 'Categorias',
        'show'   => 'Mostrar categoria'
    ],
    'dashboard' => [
        'fields' => [
            'alexa_local'     => 'Alexa Local',
            'alexa_world'     => 'Alexa World',
            'average_time'    => 'Average Time',
            'bounce_rate'     => 'Bounce Rate',
            'browsers'        => 'Browsers',
            'chart_country'   => 'Country',
            'chart_region'    => 'Region',
            'chart_visitors'  => 'Visitors',
            'entrance_pages'  => 'Entrance',
            'exit_pages'      => 'Exit',
            'keywords'        => 'Keywords',
            'os'              => 'OS',
            'page_visits'     => 'Page Visits',
            'pages'           => 'Pages',
            'region_visitors' => 'Region Visitors',
            'time_pages'      => 'Time',
            'total_visits'    => 'Total Visits',
            'traffic_sources' => 'Traffic Sources',
            'unique_visits'   => 'Unique Visits',
            'visitors'        => 'Visitors',
            'visits'          => 'Visits',
            'visits_today'    => 'Visits Today',
            'world_visitors'  => 'World Visitor Distribution'
        ],
        'index' => 'Dashboard'
    ],
    'elfinder' => [
        'index' => 'Gerenciador de arquivos',
    ],
    'page' => [
        'create' => 'Criar pagina',
        'edit'   => 'Editar pagina',
        'fields' => [
            'content'      => 'Conteudo',
            'description'  => 'Descrição',
            'parent_id'    => 'Vinculo',
            'title'        => 'Titulo',
        ],
        'index'  => 'Paginas',
        'show'   => 'Mostrar Pagina'
    ],
    'parent' => [
        'fields' => [
            'title' => 'Pagina vinculada',
        ]
    ],
    'user' => [
        'create' => 'Criar Usuario',
        'edit'   => 'Editar Usuario',
        'fields' => [
            'email'                 => 'Email',
            'ip_address'            => 'IP',
            'logged_in_at'          => 'Login em',
            'logged_out_at'         => 'Logout em',
            'password'              => 'Senha',
            'password_confirmation' => 'Confirmação de senha'
        ],
        'index'  => 'Usuarios',
        'show'   => 'Mostrar usuario'
    ]
];
