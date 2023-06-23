<?php

$nombre = $_POST['nombre'];
$empresa = $_POST['empresa'];
$correo = $_POST['correo'];
$cargo = $_POST['cargo'];
$mensaje = $_POST['mensaje'];
$newsletter = $_POST['newsletter']

$body = <<<HTML 
        <h1>Contacto desde la web</h1>
        <p>De: $nombre</p>
        <p>Empresa: $empresa</p>
        <p>Correo: $correo</p>
        <p>Cargo: $cargo</p>>
        <h2>Mensaje: $mensaje</h2>
        HTML;

$headers = "MIME-Version: 1.0 \r\n";
$headers. = "Content-type: text/html; charset=utf-8 \r\n";
$headers. = "From: $nombre <$correo>";
$headers. = "To: Sitio web <avqstest@gmail.com> \r\n";

$para = 'avqstest@gmail.com';

mail($para, 'Mensaje desde la web' $body)

header('Location:gracias.html');

?>