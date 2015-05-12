<?php
return [
    'view_manager' => [
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/500',
        'template_map' => [
            'layout/error' => __DIR__ . '/../view/layout/error.phtml',
            'error/404'    => __DIR__ . '/../view/error/404.phtml',
            'error/500'    => __DIR__ . '/../view/error/500.phtml',
        ],
    ],
];
