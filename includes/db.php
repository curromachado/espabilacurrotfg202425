<?php
// Habilitar errores detallados (puedes quitarlo en producción)
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// Parámetros de conexión
$servername = 'ZGI1MDE3OTg0Njc4Lmhvc3RpbmctZGF0YS5pbw==';
$username   = 'ZGJ1NjU3NjY2';
$password   = 'TWVndXN0YWVsTWluZWNsYWZ0MjU=';
$dbname     = 'ZGJzMTQzMDIxMTY=';

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Establecer codificación para compatibilidad completa (incluye emojis, etc.)
$conn->set_charset("utf8mb4");

// Ya está conectada la BD. No mostramos mensajes aquí para no romper cabeceras HTML.
?>
