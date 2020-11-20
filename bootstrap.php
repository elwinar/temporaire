<?php

$routes = require('routes.php');
$config = require('config.php');


// Configure the autoloader
spl_autoload_register(function($class_name) {
    $class_name = str_replace('\\', '/', $class_name);
    require($class_name. '.php'); 
});

$matched = false;
foreach ($routes as $pattern => $action) {
    if (preg_match("#$pattern#", $_SERVER['REQUEST_URI'], $matches) === 1) {
        $matched = true;
        break;
    }
}

if (!$matched) {
    http_response_code(404);
    exit;
}

list($class, $method) = explode('@', $action );

$controller = new $class();
call_user_func_array([$controller, $method], array_slice($matches, 1));

function render($view, $data) {
    require("Views/$view.php");
}
