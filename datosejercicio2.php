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
    echo "El sexo del usuario ingresado es: ";
    echo $_REQUEST['sexo'];
    echo "<br>";
    echo "Pais de origen: ";
    echo $_REQUEST['pais'];
    echo "<br>";
    echo "Pasatiempos del usuario: ";
    echo $_REQUEST['pasa'];
    echo " ";
    echo $_REQUEST['pasa1'];
    echo "<br>";
    echo "Las observaciones fueron: ";
    echo $_REQUEST['observaciones'];
    ?>
    

</body>
</html>