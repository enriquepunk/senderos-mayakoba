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

$amenidades= array(
	'cenotes' => array(
		'title' => 'Cenotes',
		'items'=> array(
			'1' =>'GRAND CENOTE:  gran punto de encuentro, espejo de agua para nado recreativo y contemplativo, isla de aves, 1 hectárea, asoleaderos, riviera acondicionada, bancas. ',
			'2' =>'Cenote Mágico: lugar de contemplación para yoga y otras actividades holísiticas.',
		),
	),
	'senderos' => array(
		'title' => 'Senderos',
		'items'=> array(
			'1' =>'Caminadores y corredores biológicos.',
			
		),
	),
	'parques' => array(
		'title' => 'Parques',
		'items'=> array(
			'1' =>'Contamos con 3 parques: Parque de los Cenotes, Parque de las Mascotas y Parque de los niños (0-7 años); compuestos por la zona de juegos interactivos, dry fountain, juegos de cuerdas, cancha de fútbol, bancas y laberinto de cetos.',

		),
	),
	'casaclub' => array(
		'title' => 'Casa Club',
		'items'=> array(
			'1' =>'Salón de fiestas, gimnasio, salón de usos múltiples de 60 PAX, duchas y sanitarios, zona de cuerpo libre, alberca semi olímpica con 2 canales de 25 metros, alberca recreativa y terraza para eventos al aire libre. ',

		),
	),
	'ciclopista' => array(
		'title' => 'Ciclopista Infinity',
		'items'=> array(
			'1' =>'Ciclopista de 5 kilómetros de largo.',
		),
	),
	'membresia' => array(
		'title' => 'Membresía Mayakoba',
		'items'=> array(
			'1' =>'Golf: paquetes de golf exclusivos para residentes de senderos. 20% de descuento para rondas a partir de 3.',
			'2' =>'Descuentos en casa club y 20% de descuento en Restaurante Koba.',
			'3' =>'Descuento en tiro con arco, kayak y croquet.',
			'4' =>'Uso de la casa club de Mayakoba.',
			'5' =>'Membresía para casa club, club de golf y club de playa de Mayakoba Country Club.',
			'6' =>'Acceso al Pueblito e Iglesia, para eventos.'
		),
	),

);


$app->get('/', function () use ($amenidades){

	$loader = new Twig_Loader_Filesystem('templates');
	$twig = new Twig_Environment($loader);
        echo $twig->render('senderos.html.twig',array('amenidades'=>$amenidades));
});


$app->run();

