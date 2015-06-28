<?php
session_start();
include_once  'config.php';
function my_autoloader($class) {
    include 'classes/class.' . $class . '.php';
}
spl_autoload_register('my_autoloader');

?>
