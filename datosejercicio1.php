<!DOCTYPE html>
<html>
<head>
    <title>Datos Enviados</title>
</head>
<body bgcolor = "skyblue">
    <h1>Datos ingresados</h1>
    <?php
    echo "El nombre ingresado es: ";
    echo $_REQUEST['nombre'];
    echo "<br>";
    echo "El apellido ingresado es: ";
    echo $_REQUEST['apellido'];
    echo "<br>";
    echo "El usuario ingresado es: ";
    echo $_REQUEST['usuario'];
    echo "<br>";
    echo "La contraseña no se mostrara por seguridad";
    ?>
</body>
</html>