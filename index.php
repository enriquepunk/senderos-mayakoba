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
$app->get('/menudeli/', function () {
	$loader = new Twig_Loader_Filesystem('templates');
	$twig = new Twig_Environment($loader);
	//echo "<pre>";print_r($data);echo "</pre>";
	echo $twig->render('menu-deli.html.twig');
});
$app->get('/menurestaurante/', function () {
	$loader = new Twig_Loader_Filesystem('templates');
	$twig = new Twig_Environment($loader);
	//echo "<pre>";print_r($data);echo "</pre>";
	echo $twig->render('menu-restaurante.html.twig');
});
$app->get('/menupasteleteria/', function () {
	$loader = new Twig_Loader_Filesystem('templates');
	$twig = new Twig_Environment($loader);
	echo $twig->render('menu-pasteleteria.html.twig');
});
$app->get('/historia/', function () {
	$loader = new Twig_Loader_Filesystem('templates');
	$twig = new Twig_Environment($loader);
	echo $twig->render('historia.html.twig');
});
$app->get('/eventos/', function () {
	$loader = new Twig_Loader_Filesystem('templates');
	$twig = new Twig_Environment($loader);
	echo $twig->render('eventos.html.twig');
});
$app->get('/bolsatrabajo/', function () {
	$loader = new Twig_Loader_Filesystem('templates');
	$twig = new Twig_Environment($loader);
	echo $twig->render('bolsa-de-trabajo.html.twig');
});
$app->get('/contacto/', function () {
	$loader = new Twig_Loader_Filesystem('templates');
	$twig = new Twig_Environment($loader);
	echo $twig->render('contacto.html.twig');
});
$app->run();

