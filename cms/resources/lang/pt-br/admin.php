<?php

$translation = [

    /*
    |--------------------------------------------------------------------------
    | Traduções em Portugues Brasileiro para o painel de administrador
    |--------------------------------------------------------------------------
    */

    'create' => [
        'falha'          => 'A operação de criação no recurso falhou!',
        'sucesso'       => 'Recurso foi criado com sucesso!.'
    ],
    'csrf_error'        => 'Parece que você não conseguiu enviar o formulario. Por favor, tente novamente.',
    'datatables' => [   // DataTables, files can be found @ https://datatables.net/plug-ins/i18n/
        'sInfo'         => 'Showing _START_ to _END_ of _TOTAL_ entries',
        'sInfoEmpty'    => 'Showing 0 to 0 of 0 entries',
        'sInfoFiltered' => '(filtered from _MAX_ total entries)',
        'sInfoPostFix'  => '',
        'sLengthMenu'   => 'Show _MENU_ entries',
        'sProcessing'   => '<div class="overlay"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg></span></div>',
        'sSearch'       => 'Search:',
        'sUrl'          => '',
        'sZeroRecords'  => 'Nenhum registro correspondente encontrado!',
        'oPaginate' => [
            'sFirst'    => 'Primeiro',
            'sLast'     => 'Ultimo',
            'sNext'     => 'Proximo',
            'sPrevious' => 'Anterior'
        ]
    ],
    'delete' => [
        'fail'          => 'Operação de remoção de recurso falhou.',
        'self'          => 'Você nem sempre consegue o que quer',
        'success'       => 'Recurso Deletado com sucesso!.'
    ],
    'empty'             => 'Nenhum registro no momento. Vamos cirar um primeiro?',
    'invalid'           => 'Voce precisa configurar sua .env primeiro para ter acesso ao Dashboard.',
    'fields' => [
        'created_at'    => 'Criado em',
        'deleted_at'    => 'Deletado em',
        'no'            => 'Nãp',
        'published_at'  => 'Publicado em',
        'reset'         => 'Reset',
        'save'          => 'Salvar',
        'updated_at'    => 'Atualizado em',
        'uploaded'      => 'Arquivo enviado',
        'yes'           => 'Sim'
    ],
    'last_login'        => 'Ultimo Login',
    'none'              => 'Nenhum',
    'ops' => [
        'confirmation'  => 'Tem certeza?',
        'create'        => 'Criar',
        'delete'        => 'Excluir',
        'edit'          => 'Editar',
        'modified'      => 'Modoficado em',
        'name'          => 'Opções',
        'order'         => 'Ordem',
        'show'          => 'Mostrar'
    ],
    'root'              => 'Painel',
    'submit'            => 'Enviar',
    'title'             => 'Painel de Controle',
    'update' => [
        'fail'          => 'A operação de atualização no recurso falhou.',
        'success'       => 'Recurso atualizado com sucesso!.'
    ],
    'save' => 'Salvar'
];

return createTranslation(require __DIR__ . DIRECTORY_SEPARATOR . 'resources.php', $translation);
