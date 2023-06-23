<?php

$nombre = $_POST['nombre'];
$empresa = $_POST['empresa'];
$correo = $_POST['correo'];
$cargo = $_POST['cargo'];
$mensaje = $_POST['mensaje'];
$newsletter = $_POST['newsletter'];

$mensaje = "Mensaje enviado por" . $nombre . ",\r\n";
$mensaje .= "Correo: " . $correo . " \r\n";
$mensaje .= "Empresa: " . $empresa . " \r\n";
$mensaje .= "Cargo: " . $cargo . " \r\n";
$mensaje .= "Mensaje: " . $mensaje . " \r\n"; 

$para = 'avqstest@gmail.com';
$asunto = 'Este mail es enviado desde Co Co';

mail($para, $asunto, utf8_decode($mensaje), $header);

header('Location:gracias.html');

?>