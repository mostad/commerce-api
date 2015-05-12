<?php
namespace Application;

/**
 * Class Module
 *
 * @package Application
 */
class Module
{
    /**
     * @return array
     */
    public function getConfig()
    {
        return (array) require __DIR__ .'/../config/module.config.php';
    }
}
