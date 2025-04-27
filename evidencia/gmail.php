<?php

$nombre = $_POST['nombre'];

$correo = $_POST['correo'];

$mensaje = $_POST['mensaje'];



$para = "yaretzi.herrerar@uanl.edu.mx";

$asunto = "Nuevo mensaje de contacto";

$contenido = "De: $nombre\nCorreo: $correo\nMensaje: $mensaje";



mail($para, $asunto, $contenido);

echo "Mensaje enviado con éxito.";

?>

