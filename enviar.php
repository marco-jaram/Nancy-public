<?php

    $destinatario = "contacto@ejemplo.com";
    $asunto = "Mensaje enviado desde formulario de contacto";
    
    $mensaje= "Este mensaje fue enviado por: " .$_POST['nombre'] . " \r\n";
    $mensaje .= "Su correo es: " . $_POST['correo'] . " \r\n";
    $mensaje .= "Comentario: " . $_POST['comentario'] . " \r\n";

    $header = 'From: ' . $correo . " \r\n";
    $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";

   
@mail($destinatario,$asunto, utf8_decode($mensaje), $header );
header("Location: exito.html");
exit;
?>
