<?php
$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$mensaje = $_POST['mensaje'];

$header = "From: webmaster@gonzalezbadilla.cl" . "\r\n"; 

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'n.felipe.g@gmail.com';
$asunto = 'Mensaje de mi portafolio';

$resultado = mail($para, $asunto, utf8_decode($mensaje), $header);
header("Location:index.php?enviook=1");
?>