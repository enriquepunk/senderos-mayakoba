<?php
switch ($_REQUEST['cmd']){
    case 'promociones':
        
        if(!empty($_POST)) {
            $email=$_POST['correo'];    
            if ($email == '' or !preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/",$email)) {
                $errors[1] = 'Ingrese un email correcto.';
            }
            if($errors){
                $response='';
                foreach ($errors as $error){
                  $response.= $error;
                }
            }
            else{
                require_once 'Modelo.php';  
                $save_email= Modelo::AddPromotion($email);
               if($save_email){ 
                    $to="info@econopet.com.mx";
        //$to="german@punkmkt.com";
                    $subject="Nuevo correo de Ofertas y promociones Econopet Cancún";
                    $headers= 'MIME-Version: 1.0' . "\r\n" . 'Content-type: text/plain; charset=UTF-8' . "\r\n";
                    $headers.= "From: ". $email."\r\n";
                    $message.="Email: ".$email."\n";
                    $mail_sent = mail( $to, $subject, $message, $headers );
                    $response= $mail_sent ? "Tu información ha sido enviada. Muy pronto recibiras nuestras promociones." : "Hubo un problema al mandar el correo, intentelo más tarde";
                }
                else{
                    $response= "Hubo un problema al mandar el correo, intentelo más tarde";
                }
                } 
        }
        break;
    case 'eventos':
        if(!empty($_POST)) {
            /*Se obtienen los valores de las variables del formulario*/ 
            $nombre = $_POST['name'];
            $tipo_evento = $_POST['tipoevento'];
            $numero_personas = $_POST['numeropersonas'];
            $email = $_POST['email'];
            $telefono = $_POST['telefono']; /* Correo al que se enviara*/
            $observaciones = $_POST['observaciones'];
            if ($nombre =='') {
                $errors[1] = 'Ingrese su nombre.';
            }
            if ($tipo_evento == '') {
                $errors[1] = 'Ingrese un tipo de evento.';    
            }
            if ($email == '' or !preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/",$email)) {
                $errors[1] = 'Ingrese un email correcto.';
            }   
            if ($telefono == '') {
                $errors[1] = 'Ingrese un teléfono.';
            }  
        }
        if($errors){
           $response='';
            foreach ($errors as $error){
            $response.= $error;
            }
        }
    else{
        //$to="info@econopet.com.mx";
        $to="german@punkmkt.com";
        $subject="Nuevo correo de contacto Eventos especiales Pasteletería";
        $headers= 'MIME-Version: 1.0' . "\r\n" . 'Content-type: text/plain; charset=UTF-8' . "\r\n";
        $headers.= "From: ". $email."\r\n";
        $message="Nombre: ".$nombre."\n";
        $message.="Tipo de evento: ".$tipo_evento."\n";
        $message.="Numero de personas: ".$numero_personas."\n";
        $message.="Correo electrónico: ".$email."\n";
        $message.="Teléfono: ".$telefono."\n";
        $message.="observaciones : ".$observaciones."\n";
        $mail_sent = mail( $to, $subject, $message, $headers );
            $response= $mail_sent ? "Tu información ha sido enviada. En breve nos pondremos en contacto contigo." : "Hubo un problema al mandar el correo, intentelo más tarde";
        }     

        break;

    case 'contacto':
        if(!empty($_POST)){
        $nombre=$_POST["name"];
        $email=$_POST["email"];
        $telefono=$_POST["telefono"]; 
        if($nombre==''){
        $errors[1] = 'Ingrese su nombre';
        }
        if($email == '' or !preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/",$email)){
            $errors[2] = 'Ingrese un email correcto.';
        }
        if($errors){
            $response='';
            foreach ($errors as $error){
              $response.= $error;
            }
        }
    else{
        //$to="info@econopet.com.mx";
        $to="german@punkmkt.com";
        $subject="Nuevo correo de contacto Pasteletería";
        $headers= 'MIME-Version: 1.0' . "\r\n" . 'Content-type: text/plain; charset=UTF-8' . "\r\n";
        $headers.= "From: ". $email."\r\n";
        $message="Nombre: ".$nombre."\n";
        $message.="Email: ".$email."\n";
        $message.="Teléfono: ".$telefono."\n";
        $mail_sent = mail( $to, $subject, $message, $headers );
            $response= $mail_sent ? "Tu información ha sido enviada. En breve nos pondremos en contacto contigo." : "Hubo un problema al mandar el correo, intentelo más tarde";
        }   
        }
        break;
    case 'franquicias':
        if(!empty($_POST)){
        $nombre=$_POST["nombre"];
        $apellidos=$_POST["apellidos"];
        $direccion=$_POST["direccion"];
        $poblacion=$_POST["poblacion"];
        $cpostal=$_POST["cpostal"];    
        $provincia=$_POST['provincia'];
        $telefono=$_POST['telefono'];
        $email=$_POST["email"];
        $areadeinteres=$_POST["areadeinteres"];
        $disponelocal=$_POST["disponelocal"];
        $metroscuadrados=$_POST["metroscuadrados"];
        $cuandoempezar=$_POST["cuandoempezar"];
        $capitalinvertir=$_POST['capitalinvertir'];
        $dedicacionprevista=$_POST["dedicacionprevista"];
        $ocupacionactual=$_POST["ocupacionactual"];
        $detallesocupacion=$_POST["detallesocupacion"];
        if($_POST['nombre']==''){
        $errors[1] = 'Ingrese su nombre';
        }
        if($_POST['apellidos']==''){
        $errors[1] = 'Ingrese sus apellidos';
        }
        if($_POST['direccion']==''){
        $errors[1] = 'Ingrese su dirección';
        }
        if($_POST['poblacion']==''){
        $errors[1] = 'Ingrese su población';
        }
        if($_POST['provincia']==''){
        $errors[1] = 'Ingrese su Provincia';
        }
        if($_POST['email'] == '' or !preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/",$_POST['email'])){
            $errors[2] = 'Ingrese un email correcto.';
        }
        if($errors){
            $response='';
            foreach ($errors as $error){
              $response.= $error;
            }
        }
    else{
        $to="info@econopet.com.mx";
        $subject="Nuevo correo de franquicias Econopet Cancún";
        $headers= 'MIME-Version: 1.0' . "\r\n" . 'Content-type: text/plain; charset=UTF-8' . "\r\n";
        $headers.= "From: ". $email."\r\n";
        $message="Nombre: ".$nombre."\n";
        $message.="Apellidos : ".$apellidos."\n";
        $message.="Dirección : ".$direccion."\n";
        $message.="Población : ".$poblacion."\n";
        $message.="Codigo postal : ".$cpostal."\n";
        $message.="Provincia : ".$provincia."\n";
        $message.="Teléfono : ".$telefono."\n";
        $message.="Email : ".$email."\n";
        $message.="Área geográfica de interés: ".$areadeinteres."\n";
        $message.="¿Dispone de local?: ".$disponelocal."\n";
        $message.="M2 : ".$metroscuadrados."\n";
        $message.="¿Cuando quiere empezar?: ".$cuandoempezar."\n";
        $message.="Capital a invertir: ".$capitalinvertir."\n";
        $message.="Dedicación prevista:: ".$dedicacionprevista."\n";
        $message.="Ocupación actual: ".$ocupacionactual."\n";
        $message.="Detalles ocupación actual: ".$detallesocupacion."\n";
        $mail_sent = mail( $to, $subject, $message, $headers );
        $response= $mail_sent ? "Tu información ha sido enviada. En breve nos pondremos en contacto contigo." : "Hubo un problema al mandar el correo, intentelo más tarde";
        }   
        }
        break;
    case 'spa':
        if(!empty($_POST)){
            //Sus datos
        $nombre=$_POST["nombre"];
        $apellidos=$_POST["apellido"];
        $email=$_POST["email"];
        $telefono=$_POST['telefono'];
        //Datos de la Mascota
        $nombre_mascota=$_POST["nombre_mascota"];
        $raza_mascota=$_POST['raza_mascota'];
        $edad_mascota=$_POST['edad_mascota'];
        $meses_mascota=$_POST['meses_mascota'];
        $sexo_mascota=$_POST['sexo_mascota'];
        //Econopet Spa
        $servicio_spa=$_POST["servicio_spa"];
        switch ($servicio_spa){
            case '1':
                $servicio_spa='Clásico';
                break;
            case '2':
                $servicio_spa='En seco';
                break;
            case '3':
                $servicio_spa='Hidratante';
                break;
            case '4':
                $servicio_spa='Intensificador de color';
                break;
            case '5':
                $servicio_spa='Garrapaticida';
                break;
            case '6':
                $servicio_spa='Antipulgas';
                break;
            case '7':
                $servicio_spa='Relajante';
                break;
            case '8':
                $servicio_spa='Alaciado de pelo';
                break;
            case '9':
                $servicio_spa='Baño medicado';
                break;
            case '10':
                $servicio_spa='Especial';
                break;
            case '11':
                $servicio_spa='Recuperación de pelo';
                break;
            case '12':
                $servicio_spa='Corte especial, tinte fantasía';
                break;
            case '13':
                $servicio_spa='Fumigación';
                break;
            case '14':
                $servicio_spa='Calma y tranquilidad';
                break;
            case '15':
                $servicio_spa='Urgencias';
                break;
            case '16':
                $servicio_spa='Piel';
                break;
            case '17':
                $servicio_spa='Armonía, perros lastimados';
                break;
            case '18':
                $servicio_spa='Sexualidad';
                break;
            case '19':
                $servicio_spa='Agresividad por miedo';
                break;
            case '20':
                $servicio_spa='Socialización';
                break;
            case '21':
                $servicio_spa='Miedos';
                break;
            case '22':
                $servicio_spa='Agresividad por agresividad';
                break;
            case '23':
                $servicio_spa='Estrés';
                break;
            default:
                break;
            
        }
        $fecha_spa=$_POST["fecha_spa"];    
        $horario_spa=$_POST['horario_spa'];
        $domicilio_spa=$_POST["domicilio_spa"];
        
        if($domicilio_spa=='1'){
            $sm_mapa=$_POST["sm_mapa"];
            $mza_mapa=$_POST["mza_mapa"];
            $lote_mapa=$_POST["lote_mapa"];
            $calle_mapa=$_POST['calle_mapa'];
            $tipo_mapa=$_POST["tipo_mapa"];
            $numero_mapa=$_POST["numero_mapa"];
            $ubicacion_mapa=$_POST["ubicacion_mapa"];
            $referencias_mapa=$_POST['referencias_mapa'];
            $latitud_mapa=$_POST["latitud_mapa"];
            $longitud_mapa=$_POST["longitud_mapa"];
        }
        
        if($_POST['nombre']==''){
        $errors[1] = 'Ingrese su nombre';
        }
        if($_POST['apellido']==''){
        $errors[1] = 'Ingrese sus apellidos';
        }
        if($_POST['fecha_spa']==''){
        $errors[1] = 'Ingrese una fecha';
        }
        if($_POST['email'] == '' or !preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/",$_POST['email'])){
            $errors[2] = 'Ingrese un email correcto.';
        }
        if($errors){
            $response='';
            foreach ($errors as $error){
              $response.= $error;
            }
        }
    else{
        $to="info@econopet.com.mx";
        //$to="german@punkmkt.com";
        $subject="Nuevo correo de Agenda tu cita Econopet SPA Econopet Cancún";
        $headers= 'MIME-Version: 1.0' . "\r\n" . 'Content-type: text/plain; charset=UTF-8' . "\r\n";
        $headers.= "From: ". $email."\r\n";
        $message="Sus datos \n";
        $message.="Nombre: ".$nombre."\n";
        $message.="Apellidos : ".$apellidos."\n";
        $message.="Email : ".$email."\n";
        $message.="Teléfono : ".$telefono."\n";
        $message.="Datos de la Mascota \n";
        $message.="Nombre de la mascota : ".$nombre_mascota."\n";
        $message.="Raza mascota : ".$raza_mascota."\n";
        $message.="Edad mascota : ".$edad_mascota."\n";
        $message.="Meses mascota : ".$meses_mascota."\n";
        $message.="Sexo mascota : ".$sexo_mascota."\n";
        $message.="Econopet Spa \n";
        $message.="Servicio: ".$servicio_spa."\n";
        $message.="Fecha: ".$fecha_spa."\n";
        $message.="Horario : ".$horario_spa."\n";
        $message.="Servicio a domicilio: ".$domicilio_spa."\n";
        if($domicilio_spa=='1'){
        $message.="Sm.: ".$sm_mapa."\n";
        $message.="Mza: ".$mza_mapa."\n";
        $message.="Lote: ".$lote_mapa."\n";
        $message.="Calle: ".$calle_mapa."\n";
        $message.="Tipo: ".$tipo_mapa."\n";
        $message.="Número: ".$numero_mapa."\n";
        $message.="Ubicación: ".$ubicacion_mapa."\n";
        $message.="Referencias: ".$referencias_mapa."\n";
        $message.="Google maps: https://maps.google.com.mx/maps?q=".$latitud_mapa.",".$longitud_mapa."&num=1&t=h&z=15\n";
        }

        $mail_sent = mail( $to, $subject, $message, $headers );
         $response= $mail_sent ? "<h2>Gracias por visitar Econopet SPA</h2><br>
                                <p>Tu cita a quedado reservada.<br>
                                En breve te enviaremos un correo con la confirmación de tu cita.
                                Has obtenido un cupón de descuento para tus compras a través de Econopet Shop
                                ¡Para hacerlo válido haz click en la imagen!</p><br>
                                <a href='descargar.php'><img src='img/promo-15.jpg'></a> " : "Hubo un problema al mandar el correo, intentelo más tarde";
        }   
        }
        break;
        case 'acuario-servicios':
        if(!empty($_POST)){
            //Sus datos
        $nombre=$_POST["nombre"];
        $apellidos=$_POST["apellido"];
        $email=$_POST["email"];
        $telefono=$_POST['telefono'];
        $fecha=$_POST['fecha'];
        $horario=$_POST['horario'];
        
        if($_POST['nombre']==''){
        $errors[1] = 'Ingrese su nombre';
        }
        if($_POST['apellido']==''){
        $errors[1] = 'Ingrese sus apellidos';
        }
        if($_POST['fecha']==''){
        $errors[1] = 'Ingrese una fecha';
        }
        if($_POST['horario']==''){
        $errors[1] = 'Ingrese un horario';
        }
        if($_POST['email'] == '' or !preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/",$_POST['email'])){
            $errors[2] = 'Ingrese un email correcto.';
        }
        if($errors){
            $response='';
            foreach ($errors as $error){
              $response.= $error;
            }
        }
    else{
        $to="info@econopet.com.mx";
        //$to="german@punkmkt.com";
        $subject="Nuevo correo de Agenda tu cita: Servicios Acuario Econopet Cancún";
        $headers= 'MIME-Version: 1.0' . "\r\n" . 'Content-type: text/plain; charset=UTF-8' . "\r\n";
        $headers.= "From: ". $email."\r\n";
        $message="Sus datos \n";
        $message.="Nombre: ".$nombre."\n";
        $message.="Apellidos : ".$apellidos."\n";
        $message.="Email : ".$email."\n";
        $message.="Teléfono : ".$telefono."\n";
        $message.="Fecha : ".$fecha."\n";
        $message.="Horario : ".$horario."\n";
        $message.="Servicios: \n";
        if(isset($_POST['asesoramiento'])){
            $message.=$_POST['asesoramiento']."\n";
        }
        if(isset($_POST['coralesinvertebrados'])){
            $message.=$_POST['coralesinvertebrados']."\n";
        }
        if(isset($_POST['jardinesverticales'])){
            $message.=$_POST['jardinesverticales']."\n";
        }
        if(isset($_POST['Acuarioydecoracion'])){
            $message.=$_POST['Acuarioydecoracion']."\n";
        }
        if(isset($_POST['Talleres'])){
            $message.=$_POST['Talleres']."\n";
        }
        if(isset($_POST['Profesionales'])){
            $message.=$_POST['Profesionales']."\n";
        }
        if(isset($_POST['pecesyplantas'])){
            $message.=$_POST['pecesyplantas']."\n";
        }
        if(isset($_POST['instalacionmanto'])){
            $message.=$_POST['instalacionmanto']."\n";
        }
        if(isset($_POST['disenocontruccion'])){
            $message.=$_POST['disenocontruccion']."\n";
        }
        $mail_sent = mail( $to, $subject, $message, $headers );
        $response= $mail_sent ? "Tu información ha sido enviada. En breve nos pondremos en contacto contigo." : "Hubo un problema al mandar el correo, intentelo más tarde";
        }   
        }
        break;
        case 'acuario-ictioterapia':
        if(!empty($_POST)){
            //Sus datos
        $nombre=$_POST["nombre"];
        $apellidos=$_POST["apellido"];
        $email=$_POST["email"];
        $telefono=$_POST['telefono'];
        $fecha=$_POST['fecha'];
        $horario=$_POST['horario'];
        
        if($_POST['nombre']==''){
        $errors[1] = 'Ingrese su nombre';
        }
        if($_POST['apellido']==''){
        $errors[1] = 'Ingrese sus apellidos';
        }
        if($_POST['fecha']==''){
        $errors[1] = 'Ingrese una fecha';
        }
        if($_POST['horario']==''){
        $errors[1] = 'Ingrese un horario';
        }
        if($_POST['email'] == '' or !preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/",$_POST['email'])){
            $errors[2] = 'Ingrese un email correcto.';
        }
        if($errors){
            $response='';
            foreach ($errors as $error){
              $response.= $error;
            }
        }
    else{
        $to="info@econopet.com.mx";
        //$to="german@punkmkt.com";
        $subject="Nuevo correo de Agenda tu cita: Ictioterapia Acuario Econopet Cancún";
        $headers= 'MIME-Version: 1.0' . "\r\n" . 'Content-type: text/plain; charset=UTF-8' . "\r\n";
        $headers.= "From: ". $email."\r\n";
        $message="Sus datos \n";
        $message.="Nombre: ".$nombre."\n";
        $message.="Apellidos : ".$apellidos."\n";
        $message.="Email : ".$email."\n";
        $message.="Teléfono : ".$telefono."\n";
        $message.="Fecha : ".$fecha."\n";
        $message.="Horario : ".$horario."\n";
        $mail_sent = mail( $to, $subject, $message, $headers );
        $response= $mail_sent ? "Tu información ha sido enviada. En breve nos pondremos en contacto contigo." : "Hubo un problema al mandar el correo, intentelo más tarde";
        }   
        }
        break;
    default :



        break;



}



echo json_encode($response);



?>



