<!DOCTYPE html>
<html>
    <head  data-template-set="html5-reset">
    <meta name="description" content="Nuestro menú cuenta con deliciosas entradas; frías y calientes, sopas, ensaladas, pescados, combinación de mariscos, Langosta viva, camarones, mariscos , pastas, carnes y aves">
    <meta name="keywords" content="Mariscos en cancun, langosta, pescado, camarones, combinación de mariscos, ensaladas">
    <title> Lorenzillo´s Cancún | Nuestro menú</title>
<?php require '../includes/mheader.php'; ?>
<?php require 'slide_menu.php'; ?>

<section id="menu-contenudo" class="row-fluid">
    
    <div class="span10 offset1">
        <div id="menu_menu" class="span3">
            <ul>
                <li id="menu_carta" class="menu1"><h1>Menú a la carta</h1>
                    <ul class="sub-menu first">
                        <li class="opcmenu "  data-rel="menu-entradas"><h2 class="selected">Entradas</h2></li>
                        <li class="opcmenu"  data-rel="menu-sopas"><h2>Sopas</h2></li>
                        <li class="opcmenu"  data-rel="menu-ensaladas"><h2>Ensaladas</h2></li>
                        <li class="opcmenu"  data-rel="menu-pescados"><h2>Pescados</h2></li>
                        <li class="opcmenu"  data-rel="menu-combinacion"><h2>Combinación de mariscos</h2></li>
                        <li class="opcmenu"  data-rel="menu-langosta"><h2>Langosta viva</h2></li>
                        <li class="opcmenu"  data-rel="menu-camarones"><h2>Camarones</h2></li>
                        <li class="opcmenu"  data-rel="menu-mariscosypasta"><h2>Mariscos y pastas</h2></li>
                        <li class="opcmenu"  data-rel="menu-carnesyaves"><h2>Carnes y aves</h2></li>
                    </ul>
                </li>
                <li id="menu_especiales" class="bordes menu1"><h1>Especiales</h1>
                    <ul class="sub-menu">
                        <li class="opcmenu"  data-rel="menu-espentradas"><h2>Entradas</h2></li>
                        <li class="opcmenu"  data-rel="menu-espsopas"><h2>Sopas</h2></li>
                        <li class="opcmenu"  data-rel="menu-esppirata"><h2>Del pirata</h2></li>
                    </ul>
                </li>
                <li id="menu_postres" class="bordes menu1"><h1>Postres</h1>
                    <ul class="sub-menu">
                        <li class="opcmenu" data-rel="menu-postresentradas"><h2>Pasteles</h2></li>
                        <li class="opcmenu" data-rel="menu-postrescafes"><h2>Cafés</h2></li>
                        <li class="opcmenu" data-rel="menu-postresvinos"><h2>Vino de postre</h2></li>
                    </ul>
                </li>
                <li data-rel="menu_cava" class="bordes opcmenu"><h1>Cava</h1></li>
            </ul>
        </div>
        
        <div id="slide_menu_contenido" class="span9">
            <div id="menu-entradas" class="menusecciones container-fluid mostrar">
                <?php require_once 'entradas.php'; ?>
            </div>
            <div id="menu-sopas" class="menusecciones container-fluid mostrar">
                <?php require_once 'sopas.php';?>
            </div>
            <div id="menu-ensaladas" class="menusecciones container-fluid mostrar">
                <?php require_once 'ensaladas.php';?>
            </div>
            <div id="menu-pescados" class="menusecciones container-fluid mostrar">
                <?php require_once 'pescados.php';?>
            </div>
            <div id="menu-combinacion" class="menusecciones container-fluid mostrar">
                <?php require_once 'combmariscos.php';?>
            </div>  
            <div id="menu-langosta" class="menusecciones container-fluid mostrar">
                <?php require_once 'langosta.php';?>
            </div>  
            <div id="menu-camarones" class="menusecciones container-fluid mostrar">
                <?php require_once 'camarones.php';?>
            </div>
            <div id="menu-mariscosypasta" class="menusecciones container-fluid mostrar">
                <?php require_once 'marypas.php';?>
            </div>
            <div id="menu-carnesyaves" class="menusecciones container-fluid mostrar">
                <?php require_once 'carnesyaves.php';?>
            </div>
            <div id="menu-espentradas" class="menusecciones container-fluid mostrar">
                <?php require_once 'especialesentradas.php';?>
            </div>
            <div id="menu-espsopas" class="menusecciones container-fluid mostrar">
                <?php require_once 'especialessopas.php';?>
            </div> 
            <div id="menu-esppirata" class="menusecciones container-fluid mostrar">
                <?php require_once 'especialespirata.php';?>
            </div>
            <div id="menu-postresentradas" class="menusecciones container-fluid mostrar">
                <?php require_once 'postrespasteles.php';?>
            </div>
            <div id="menu-postrescafes" class="menusecciones container-fluid mostrar">
                <?php require_once 'postrescafes.php';?>
            </div>
            <div id="menu-postresvinos" class="menusecciones container-fluid mostrar">
                <?php require_once 'postresvino.php';?>
            </div>
            <div id="menu_cava" class="menusecciones container-fluid mostrar">
                <?php require_once 'cavaview.php';?>
            </div>
        </div>
        
    </div>
</section>

<script>
    $('.first').show();
$("#menu-sopas").hide();
$("#menu-ensaladas").hide();
$("#menu-pescados").hide();
$("#menu-combinacion").hide();
$("#menu-langosta").hide();
$("#menu-camarones").hide();
$("#menu-mariscosypasta").hide();
$("#menu-carnesyaves").hide();
$("#menu-espentradas").hide();
$("#menu-espsopas").hide();
$("#menu-esppirata").hide();
$("#menu-postresentradas").hide();
$("#menu-postrescafes").hide();
$("#menu-postresvinos").hide();
$("#menu_cava").hide();

$("#menu_carta h1").click(function(){
    $("#menu_carta .sub-menu").toggle('slow',function(){
    $('#menu_especiales .sub-menu').hide();
    $('#menu_postres .sub-menu').hide();
    });
})
$("#menu_especiales h1").click(function(){
    $("#menu_especiales .sub-menu").toggle('slow',function(){
            $('#menu_carta .sub-menu').hide('slow');
            $('#menu_postres .sub-menu').hide('slow');
        });
    
    
    })
    
    $("#menu_postres h1").click(function(){
        $("#menu_postres .sub-menu").toggle('slow',function(){
            $('#menu_carta .sub-menu').hide('slow');
            $('#menu_especiales .sub-menu').hide('slow');
        });
        
    })
//    $("#menu_cava h1").click(function(){
//            $('#menu_carta .sub-menu').hide('slow');
//            $('#menu_especiales .sub-menu').hide('slow');
//            $('#menu_postres .sub-menu').hide('slow');
//            $('.first').hide('slow');
//    })
    
$(".opcmenu").click( function () {
   var des=$(this).attr("data-rel");
   if(des == "menu_cava"){
       $('#menu_carta .sub-menu').hide('slow');
            $('#menu_especiales .sub-menu').hide('slow');
            $('#menu_postres .sub-menu').hide('slow');
            $('.first').hide('slow');
   }
   $(".mostrar").hide();
   $("#"+des).fadeIn("slow");
   $(".sub-menu ul li h2").removeClass("selected");
    $(this).addClass("selected");
})

</script>
<?php require '../includes/footer.php'; ?>