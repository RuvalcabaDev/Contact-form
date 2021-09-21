<?php

$nombreWeb = "desde ruvalcaba.dev";

if(isset($_POST['submit'])) { 
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $subject = $_POST['asunto'];
    $cuerpoMensaje = $_POST['mensaje'];
    
    
    $email_to = "salvador@ruvalcaba.dev";
    $email_subject = "Contactado por $nombre $nombreWeb";
    $mensaje = "Mensaje enviado $nombreWeb \n";
    $mensaje.= "Nombre: $nombre \n";
    $mensaje.= "Correo: $correo \n";
    $mensaje.= "Asunto: $subject \n";
    $mensaje.= "Mensaje: $cuerpoMensaje \n"; 
    
    mail($email_to, $email_subject, $mensaje);
    
} else  header("Location: ./");