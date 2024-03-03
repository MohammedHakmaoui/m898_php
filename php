<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Ejemplo</title>
</head>
<body>

<?php
// Mensaje de bienvenida
$nombre_usuario = "Usuario";
if(isset($_GET['nombre'])) {
    $nombre_usuario = $_GET['nombre'];
}

echo "<h1>Bienvenido, $nombre_usuario</h1>";
?>

<p>Esta es una página de ejemplo.</p>

</body>
</html>
