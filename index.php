<?php
require_once 'vendor/Twig/lib/Twig/Autoloader.php';
require_once 'vendor/rb.php';
require_once 'vendor/Slim/Slim.php';
//http://www.slimframework.com/
//http://redbeanphp.com/querying
//http://twig.sensiolabs.org/doc/api.html
Twig_Autoloader::register();
$app = new Slim(); 
Twig_Autoloader::register();
$app->get('/', function () {
	$loader = new Twig_Loader_Filesystem('templates');
	$twig = new Twig_Environment($loader);
        echo $twig->render('home.html.twig',array());
});
$app->get('/contacto/', function () {
	$loader = new Twig_Loader_Filesystem('templates');
	$twig = new Twig_Environment($loader);
	echo $twig->render('contacto.html.twig');
});

$app->run();

