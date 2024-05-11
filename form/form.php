<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir la valoración y el comentario
    $rating = $_POST['rating'];
    $feedback = $_POST['feedback'];

    // Aquí puedes realizar operaciones con los datos recibidos, como guardarlos en una base de datos
    // o mostrarlos en una página, etc.

    // Por ejemplo, para mostrarlos en pantalla:
    echo "Rating: " . $rating . "<br>";
    echo "Feedback: " . $feedback;
}
?>