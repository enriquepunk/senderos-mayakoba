<?php

$nombre = $_POST['nombre'];
$tel = $_POST['telefono'];
$mail = $_POST['email'];
$asunto = $_POST['correo'];
$msg = $_POST['mensaje'];


$subject = 'Senderos Mayakoba - Contacto';
$to = "enrique@punkmkt.com";



//$headers .= 'Content-Type: text/plain; charset =UTF-8' . "\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= "From: $mail" . "\r\n";
$message ="";
$message .="Nombre: ".$nombre."<br>";
$message .="Email: ".$mail."<br>";
$message .="Teléfono: ".$tel."<br>";
$message .="Asunto: ".$asunto."<br>";
$message .="Mensaje: ".$msg."<br>";


if(mail($to, $subject,$message,$headers)){
echo "Mensaje enviado";
}
else{
echo "Algo anda mal, intente de nuevo";
}
?>