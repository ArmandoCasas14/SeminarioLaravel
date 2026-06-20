<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
</head>
<body>
    <h2>Registro Rápido</h2>
    
    <form method="POST" action="validar.php">
        <label>Nombre: <input type="text" name="nombre"></label><br><br>
        <label>Email: <input type="email" name="email"></label><br><br>
        <label>Telefono: <input type="text" name="telefono"></label><br><br>
        <button type="submit">Enviar</button>
    </form>
    <p><strong>Comparativa:</strong> Prueba cambiando <code>method="GET"</code> y observa la URL.</p>
</body>
</html>