<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="http://162.243.121.61/mayakoba/senderos-mayakoba/">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link href="vendor/bootstrap-3.1.1/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="vendor/fancybox/jquery.fancybox.css">
    <link href="web/css/style.css" rel="stylesheet" media="screen">
    <link href="web/css/main.css" rel="stylesheet" media="screen">
	<?php wp_head(); ?>
</head>

<body class = "home">
	  <header id="blog" class="container <?php if ( is_singular() ) { echo ' single-post'; }?>">
          <div class="row">
            <div class="col-sm-12 col-md-10 col-md-offset-1">
              <div class="row">
                <div class="col-xs-6 col-sm-2 col-md-3 col-lg-4">
                  <a href="index.php"><img class = "senderos-mayakaba img-responsive" src="./web/image/General/logo.png"/></a>
                </div>
                <div class="col-sm-10 col-md-9 col-lg-8">
                  <div class = "row text-right top-header-menu-nav">
                    <div class = "col-sm-4 col-md-3 col-md-offset-2 col-lg-offset-4 ">
                      <a href="https://www.facebook.com/senderosmayakoba"><span class = "facebook icon-facebook px20 color1"></span></a>
                      <a href="https://twitter.com/SenderosMk"><span class = "twitter icon-twitter px20 color1"></span></a>
                      <a href="mailto:info@senderosmayakoba.mx"><span class = "share-mail icon-mail px20 color1"></span></a>
                    </div>
                    <div class = "col-sm-5 col-md-4 col-lg-3">
                      <span class = "icon-phone px20 color1 vertical-aling"></span><a class = "px12 color1 montserrat" href="tel:+52 998 884 4145">+52 (998) 884 4145</a>
                    </div>
                    <div class = "col-sm-3 col-md-3 col-lg-2">
                      <span class = "lang"><span class = "lang-icon icon-bubbles px20 color1 vertical-aling"></span><span class = "lang-text px13 color1 montserrat">Esp V</span></span>
                    </div>
                  </div>
                  <div class = "row">
                    <nav class="navbar navbar-default" role="navigation">
                      <div class="navbar-header ">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                        
                      </div>
                      <div  id="navbar" class="collapse navbar-collapse">           
                        <ul class="nav navbar-nav navbar-right">
                          <li><a href="index.php" class = "px13 color1 montserrat"> <span class = "icon-home px20 color2 vertical-aling"></span></a></li>
                          <li class="dropdown">
                              <a class="dropdown-toggle px13 color1 montserrat" data-toggle="dropdown" href="#">
                                 SENDEROS DE MAYAKOBA</span>
                              </a>
                              <ul class="dropdown-menu ">
                                <li><a class = "px13 color1 montserrat" href="./senderos.php">AMENIDADES & CONCEPTO</a></li>
                                <li><a class = "px13 color1 montserrat" href="./ubicacion.php">UBICACIÓN</a></li>
                                <li><a class = "px13 color1 montserrat" href="./master-plan.php">MASTER PLAN</a></li>
                                <li><a class = "px13 color1 monxtserrat" href="./financiamiento.php">FINANCIAMIENTO</a></li>
                                <li><a class = "px13 color1 montserrat" href="./promociones.php">PROMOCIONES</a></li>
                              </ul>
                          </li>
                          <li class="dropdown">
                              <a class="dropdown-toggle px13 color1 montserrat" data-toggle="dropdown" href="#">
                                 GALERÍA</span>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a class = "px13 color1 montserrat" href="./galeria-render.php">RENDERS</a></li>
                                <li><a class = "px13 color1 montserrat" href="./galeria-fotos.php">FOTOS</a></li>
                                <li><a class = "px13 color1 montserrat" href="./galeria-videos.php">VIDEOS</a></li>
                                <li><a class = "px13 color1 montserrat" href="./galeria-obra.php">AVANCES DE OBRA</a></li>
                              </ul>
                          </li>
                          <!--<li class = ""><a href="index.php" class = "px13 color1 montserrat"> <span class = "icon-home px20 color2 vertical-aling"></span> SENDEROS DE MAYAKOBA</a></li>-->
                          <!--<li><a href="#" class = "px13 color1 montserrat">GALERÍA</a></li>-->
                          <li><a href="./quienes-somos.php" class = "px13 color1 montserrat">QUIÉNES SOMOS</a></li>
                          <li><a href="./contacto.php" class = "px13 color1 montserrat">CONTACTO</a></li>
                          <li><a href="./blog/" class = "px13 color1 montserrat">NOTICIAS</a></li>
                        </ul>
                      </div>
                    </nav>                  
                  </div>
                </div>
              </div>
            </div>
          </div>
      </header>
      <div id = "main">