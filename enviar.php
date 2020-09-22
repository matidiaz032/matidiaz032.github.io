<?php 
    // Variables que vienen por formulario
    $nombre = $_POST['nombre'];
    $mensaje = $_POST['mensaje'];
    $email = $_POST['email'];

    // Variables definidas por nosotros
    $asunto = "Mensaje desde la Web";
    $destino = "maty_032@hotmail.es"; // email al que llegarán nuestros mensajes

    // Cuerpo del email
    $contacto = "
        Nombre: $nombre <br>
        Email: $email <br>
        Mensaje de la Web: $mensaje <br>
    ";

    // Proceso del envío:
    $headers="MIME-Version: 1.0" . "\r\n";
    $headers.="Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers.='From: '. $email . "\r\n";
    
    mail($destino, $asunto, $contacto, $headers);
?>