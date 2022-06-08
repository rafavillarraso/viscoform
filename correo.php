<?php
    $nombre = $_POST['nombre'];
    $mail = $_POST['mail'];
    $asunto = 'Formulario Descanso Solidario';
    $mensaje = "Nombre: ".$nombre."Email: ".$mail."Mensaje: ".$_POST['mensaje'];

    if (mail('info@viscoform.es', $asunto, $mensaje)) {
        echo "correo enviado correctamente";
    }else{
        echo "No se ha podido enviar el correo";
    }
    ?>