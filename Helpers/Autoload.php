<?php
namespace RESTAPI\Helpers;

class AutoLoad
{
    public static function autoload($className)
    {
        $className = str_replace('RESTAPI', '', $className);
        $className = str_replace('\\', '/', $className);
        $className = $className . '.php';

        if(file_exists(APP_PATH . $className)) {
            require_once APP_PATH . $className;
        }
    }
}
spl_autoload_register(__NAMESPACE__ . '\AutoLoad::autoload');