<?php

    $para = "179996@upslp.edu.mx"; //179996@upslp.edu.mx
    $asunto = "Enviando información";
    $RespuestaUno = $_POST['uno'];
    $RespuestaDos = $_POST['dos'];
    $RespuestaTres = $_POST['tres'];
    $RespuestaCuatro = $_POST['cuatro'];
    $RespuestaCinco = $_POST['cinco'];
    $RespuestaSeis = $_POST['seis'];
    $RespuestaSiete = $_POST['siete'];
    $RespuestaOcho = $_POST['ocho'];
    $RespuestaNueve = $_POST['nueve'];
    $RespuestaDiez = $_POST['diez'];
    $RespuestaOnce = $_POST['once'];
    $RespuestaDoce = $_POST['doce'];
    $RespuestaTrece = $_POST['diez-y-seis'];

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";

    $cuerpo = "
        Respuestas de test:<br>
        Respuesta 1: $RespuestaUno<br>
        Respuesta 2: $RespuestaDos<br>
        Respuesta 3: $RespuestaTres<br>
        Respuesta 4: $RespuestaCuatro<br>
        Respuesta 5: $RespuestaCinco<br>
        Respuesta 6: $RespuestaSeis<br>
        Respuesta 7: $RespuestaSiete<br>
        Respuesta 8: $RespuestaOcho<br>
        Respuesta 9: $RespuestaNueve<br>
        Respuesta 10: $RespuestaDiez<br>
        Respuesta 11: $RespuestaOnce<br>
        Respuesta 12: $RespuestaDoce<br>
        Respuesta 13: $RespuestaTrece<br>
    ";

    if (mail($para, $asunto, $cuerpo, $headers)) {
        echo "El correo se ha enviado correctamente.";
    } else {
        echo "Hubo un error con el envío del correo.";
    }
?>
