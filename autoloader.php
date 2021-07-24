<?php

define('BASE_PATH', realpath(dirname(__FILE__)));
define('DS', DIRECTORY_SEPARATOR);

spl_autoload_register(function ($class) {
    $class = str_replace ('_', DS, $class);
    $class = str_replace ('\\', DS, $class);

    $file = BASE_PATH.DS.$class.'.php';

    if (file_exists($file)) {
        include($file);
        // if (class_exists($class)) {
        //     return true;
        // }
    }
    // return false;
});

if (function_exists ('stream_resolve_include_path') == false ) {
    function stream_resolve_include_path ($filename) {
        $paths = explode (PATH_SEPARATOR, get_include_path ());
        foreach ($paths as $path) {
            $path = realpath ($path . PATH_SEPARATOR . $filename);
            if ($path) {
                return $path;
            }
        }
        return false;
    }
}