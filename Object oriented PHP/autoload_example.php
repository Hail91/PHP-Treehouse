<?php 

// Autoloading function that will search directory for class if the one needed is
// not immediately found.

function autoloader($class_name) { // Takes a class name
    // Loop over all subdirectories
    foreach(glob(__DIR__ . '/*', GLOB_ONLYDIR) as $dir) {
        // If the passed class_name exists in directory
        if(file_exists("$dir/" . $class_name . ' .php')) {
            // Require it
            require_once "$dir/" . $class_name . ' .php';
            // then break
            break;
        }
    }
}

spl_autoload_register('autoloader');