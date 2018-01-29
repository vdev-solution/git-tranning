<?php

// This is Simple MVC for Intership 

error_reporting(E_ALL ^ E_DEPRECATED);
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));

require ROOT . DS . 'includes' . DS . 'common.php';

$controller = empty($_GET['c']) ? 'index' : strtolower($_GET['c']);
$method = empty($_GET['m']) ? 'index' : strtolower($_GET['m']);

$c_file = ROOT . DS . 'controllers' . DS . $controller . '.php';
$m_func = $controller . '_' . $method;

if (is_readable($c_file)) {
    include $c_file;
    call_user_func($m_func);
} else {
    die("Page not found !");
}
