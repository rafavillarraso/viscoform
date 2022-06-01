<?php
    $nombre = $_POST['nombre'];
    $mail = $_POST['mail'];
    $asunto = 'Formulario Descanso Solidario';
    $mensaje = "Nombre: ".$nombre."<br> Email: ".$mail."<br> Mensaje: ".$_POST['mensaje'];

    if (mail('rafa@pilafestudio.com', $asunto, $mensaje)) {
        echo "correo enviado correctamente";
    }else{
        echo "Merda pa tu";
    }
    ?>