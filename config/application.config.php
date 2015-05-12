<?php
return [
    'modules' => [
        'Application',
    ],

    'module_listener_options' => [
        'config_glob_paths' => [
            './config/autoload/{,*.}{global,local}.php',
        ],

        'cache_dir'            => './data/cache',
        'config_cache_enabled' => true,
    ],
];
