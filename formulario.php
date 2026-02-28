<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica Final</title>
</head>
<body>
<b>Datos del contacto:</b><br><br>
    <b>Nombre:</b>
    <?php echo $_POST["nombre"]." "."<b>Telefono:</b>"." ". $_POST["telefono"]." "."<b>Correo:</b>"." ". $_POST["correo"]; ?><br><br>
    <b>Asunto:</b>
    <?php echo $_POST["asunto"]; ?><br><br>
    <b>Texto:</b>
    <?php echo $_POST["comentarios"]; ?><br><br>
</body>
</html>