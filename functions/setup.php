<?php
    $loader = new Twig_Loader_Filesystem('templates');  
    $twig = new Twig_Environment($loader);
    R::setup('mysql:host=localhost;dbname=econopet','root','');
$url_uploadimage="http://econopet.com.mx/shop/image/";
$url_webpage="http://econopet.com.mx";
$base_url="/tienda_FB";