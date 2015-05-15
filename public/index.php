<?php
chdir(dirname(__DIR__));
require './vendor/autoload.php';

$config = require './config/application.config.php';

if (isset($_SERVER['APP_ENV']) && $_SERVER['APP_ENV'] === 'dev' && file_exists('./config/development.config.php')) {
    $config = Zend\Stdlib\ArrayUtils::merge($config, require './config/development.config.php');
} elseif (php_sapi_name() === 'cli' && file_exists('./config/cli.config.php')) {
    $config = Zend\Stdlib\ArrayUtils::merge($config, require './config/cli.config.php');
}

Zend\Mvc\Application::init($config)->run();
