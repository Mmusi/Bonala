<?php

namespace BonalaPHP;

use BonalaPHP\App;

//More information on the global variable $_SERVER here -> 
	//http://php.net/manual/en/reserved.variables.server.php , or here -> 
	//http://www.w3resource.com/php/super-variables/$_SERVER.php
// If the script was queried through a secure HTTP protocol, $_SERVER['HTTPS'] is set to a non-empty value.
if(isset($_SERVER["HTTPS"])&& strtolower($_SERVER["HTTPS"]) == "on" ) {
	$protocol = 'https://';
} else {
	$protocol = 'http://';
}

//Creation of the session as soon as the website loads
if (empty($_SESSION)) {
    session_start();
}

define('PROTOCOL', $protocol);
// Removing backslashes for Windows compatibility in wamp
define('ROOT_URL', PROTOCOL . $_SERVER['HTTP_HOST'] . str_replace('\\', '', dirname(htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES))) . '/');
//Please uncomment following line and comment previous line if the server is linux based
//define('ROOT_URL', PROTOCOL . $_SERVER['HTTP_HOST'] . str_replace('\\', '', dirname(htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES))));
define('ROOT_HOME', str_replace('\\', '', dirname(htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES))) . '/');
define('ROOT_PATH', __DIR__ . '/');

require ROOT_PATH . 'app/Autoloader.php';
app\Autoloader::init(); // Load necessary classes
if(!empty($_GET['p'])) {
	$controller = $_GET['p'];
} else {
	$controller = 'BonalaController';
}

if(!empty($_GET['a'])){
    $action = $_GET['a'];
} else {
	$action = 'home';
} 

$params = [
	'ctrl' => $controller,
	'act' => $action
];
app\Router::run($params);
