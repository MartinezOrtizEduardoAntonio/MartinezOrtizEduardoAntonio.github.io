<?php
// Recibe los datos del formulario
$name = $_POST['name'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$msg_subject = $_POST['msg_subject'];
$message = $_POST['message'];

// Dirección de correo electrónico a la que se enviará el correo
$destinatario = $email;

// Asunto del correo
$asunto = "Nuevo mensaje de contacto: $msg_subject";

// Cuerpo del correo
$cuerpo = "Nombre: $name\n";
$cuerpo .= "Correo electrónico: $email\n";
$cuerpo .= "Número de celular: $phone_number\n";
$cuerpo .= "Mensaje:\n$message";

// Headers
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Envía el correo
$mail_enviado = mail($destinatario, $asunto, $cuerpo, $headers);

// Verifica si se envió correctamente
if ($mail_enviado) {
    // Redirige a project.html después de enviar el correo
    header('Location: project.html');
    exit();
} else {
    echo "Hubo un problema al enviar el correo.";
}