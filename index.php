<?php

// php autoloading
function autoload($class){
   include 'project/'. $class. '.php';
}
spl_autoload_register('autoload');

// composer autoloading
include 'vendor/autoload.php';

new App\project2\dir\Z();
