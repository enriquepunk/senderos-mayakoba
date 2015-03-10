<?php
session_start();
require_once 'vendor/Twig/lib/Twig/Autoloader.php';
require_once 'vendor/rb.php';
require_once 'vendor/Slim/Slim.php';
//http://www.slimframework.com/
//http://redbeanphp.com/querying
//http://twig.sensiolabs.org/doc/api.html

Twig_Autoloader::register();
$app = new Slim(); 
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);
$twig->addGlobal("session", $_SESSION);

$languages = array('ES','EN');

define('LANG', 'ES');
$lang_redirect="http://".$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];


	
	$page_es = array(
		'titulo' => "Contacto",
		'nombre' => "Nombre:",
		'mail' => "Email:",
		'tel' => "Teléfono:",
		'asunto' => "Asunto:",
		'mensaje' => "Mensaje:",
		'enviar' => "Enviar",
		'texto' => '<p class="color1 montserrat bold italic">Información de ventas:</p>
						<p class="color1 montserrat bold">Dirección:<br>
						<span class="color1 open-sans weight-100">Boulevard Playa del Carmen, Km. 299.</span></p>
						<p class="color1 montserrat bold">Teléfonos: <br>
						<span class="color1 open-sans weight-100">+52 (984) 109 13 70</span></p>
						',
		);

	$page_en = array(
		'titulo'=>"Contact",
		'nombre' => "Name:",
		'mail' => "Email:",
		'tel' => "Phone:",
		'asunto' => "Subject:",
		'mensaje' => "Message:",
		'enviar' => "Send",
		'texto' => '<p class="color1 montserrat bold italic">Sales information:</p>
						<p class="color1 montserrat bold">Address:</p>
						<p class="color1 open-sans">Boulevard Playa del Carmen, Km. 299.</p>
						<p class="color1 montserrat bold">Phones:</p>
						<p class="color1 open-sans">+52 (984) 109 13 70</p>',
		);

	if (LANG=='ES'){
    $page=$page_es;
}
else{
    $page=$page_en;
    
}
	echo $twig->render('contacto.html.twig',array('page'=>$page));
?>

