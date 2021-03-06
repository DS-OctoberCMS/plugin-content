<?php return [
    'plugin' => [
        'name' => 'Контент контроль',
        'description' => 'Менеджер управления контентом'
    ],
    'permissions' => [
        'items'         => 'Управления контентом',
        'items_changes' => 'Управление блоками контента (только для разработчиков)',
    ],
    'form' => [
        'change' => 'Изменить',
        'rename' => 'Переименовать',
        'clone'  => 'Клонировать',
    ],
    'menu' => [
        'items' => 'Контент',
    ],
    'components' => [
        'get_content' => [
            'name' => 'Контент зборщик',
            'desc' => 'Собирает шаблон из указанных готовых блоков.',
            'page_slug_title' => 'Слаг адреса страницы',
            'page_slug_desc'  => 'Слаг адреса страницы который будет менятся динамически',
            'is404_title' => 'Страница 404',
            'is404_desc'  => 'Если страница конфигураций не найдено, показывать 404 страницу.',
        ],
        'get_items' => [
            'name' => 'Контент блоки',
            'desc' => 'Получает заготовленные контент блоки',
        ],
    ],
];