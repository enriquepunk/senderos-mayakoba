<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->

	    <footer id="footer" class="clearfix container-fluid  footer-background">
        <div class = "container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1 text-center">
              <div class = "row footer-super">
                <div class = "col-md-8">
                  <ul class = "row footer-list-nav-menu text-left">
                    <li class = "">
                      <a class = "color1 montserrat px12" href="">Inicio</a>
                    </li>
                    <li class = "">
                      <a class = "color1 montserrat px12" href="">Senderos de Mayakobá</a>
                      <ul class = "submenu-footer-nav">
                          <li><a class = "color1 montserrat px12" href="#">Ubicación</a></li>
                          <li><a class = "color1 montserrat px12" href="#">Master Plan</a></li>
                          <li><a class = "color1 montserrat px12" href="#">Financiamiento</a></li>
                          <li><a class = "color1 montserrat px12" href="#">Promociones</a></li>
                      </ul>
                    </li>
                    <li class = "">
                      <a class = "color1 montserrat px12" href="">Galería</a>
                      <ul class = "submenu-footer-nav">
                          <li><a class = "color1 montserrat px12" href="#">Renders</a></li>
                          <li><a class = "color1 montserrat px12" href="#">Fotografía</a></li>
                          <li><a class = "color1 montserrat px12" href="#">Videos</a></li>
                          <li><a class = "color1 montserrat px12" href="#">Avance de obra</a></li>
                      </ul>
                    </li>
                    <li class = "">
                      <a class = "color1 montserrat px12" href="">Quiénes somos</a>
                    </li>
                    <li class = "">
                      <a class = "color1 montserrat px12" href="">Contacto</a>
                    </li>
                    <li class = "">
                      <a class = "color1 montserrat px12" href="">Noticias</a>
                    </li>
                  </ul>
                </div>
                <div class = "col-md-4">
                  <div class = "row">
                    <div class = "col-md-5 col-md-offset-2">
                      <a class = "color1 montserrat px12" href="">01 800 00 00 00</a>
                    </div>
                    <div class = "col-md-5">
                        <span class = "facebook icon-facebook px20 color1"></span>
                        <span class = "twitter icon-twitter px20 color1"></span>
                        <span class = "share-mail icon-mail px20 color1"></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class = "row">
                <div class = "col-md-7 col-md-offset-5">
                    <form class="form-inline row" role="form">
                      <div class = "col-md-12">
                          <div class = "row">
                              <div class="form-group col-xs-12 text-right">
                                  <label for="ejemplo_email_3" class="color1 montserrat px12 text-righ">suscríbete a nuestro Newsletter: </label>
                                  <input class = "newsletter-input open-sans px12" type="email" class="form-control" id="ejemplo_email_3"
                                         placeholder="E-mail">
                                  <button class = "submit-newsletter color1 montserrat px12 background2" type="submit" class="btn btn-default">Enviar</button>
                              </div>
                          </div>
                      </div>
                    </form>
                    <div class = "row copy-text">
                        <div class = "col-md-12 color1 montserrat px12 text-right">
                          Todos los Derechos Reservados &reg; Senderos de Matakobá.
                        </div>
                    </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--script src="//code.jquery.com/jquery.js"></script-->
    <script src="vendor/jquery.js"></script>
    <script src = "web/js/swfobject.js" defer></script>
    <!--<script src="vendor/cycle2.js"></script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="vendor/bootstrap-3.1.1/js/bootstrap.min.js" defer></script>
    <script src="vendor/fancybox/jquery.fancybox.js" defer></script>
    <script src="vendor/validate.js" defer></script>
    <script src="web/js/functions.js" defer></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js" defer></script>

    <!--<script type="text/javascript"
      src="http://maps.googleapis.com/maps/api/js?key=AIzaSyA_TbxX1m1biZuaHgiZKmrrUPpvA046twA&sensor=false"></script>
    <script type="text/javascript" src="web/js/mapa.js"></script>-->
  
	<?php wp_footer(); ?>
</body>
</html>