<?php
$mensaje = "";
$nombre_mostrado = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validación básica
    if (!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['telefono'])) {
        if (is_numeric($_POST['telefono'])) {
            $nombre_mostrado = htmlspecialchars($_POST['nombre']);
            $mensaje = "Bienvenido, $nombre_mostrado!";
        } else {
            $mensaje = "El campo teléfono debe ser numérico.";
        }
    } else {
        $mensaje = "Todos los campos son obligatorios.";
    }
}
?>
<p style="color:blue;"><?php echo $mensaje; ?></p>