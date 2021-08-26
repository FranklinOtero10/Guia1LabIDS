<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
</head>
<body bgcolor = "skyblue">
    <h1>Ingrese sus datos</h1>
    <table border = "1">
            <form method="POST" action="datosejercicio1.php" >
                <tr>
                    <td>Ingrese su nombre: </td>
                    <td><input type="text" name="nombre"></td>
                </tr>
                <tr>
                    <td>Ingrese su apellido: </td>
                    <td><input type="text" name="apellido"></td>
                </tr>
                <tr>
                    <td>Ingrese su usuario: </td>
                    <td><input type="text" name="usuario"></td>
                </tr>
                <tr>
                    <td>Ingrese su contraseña: </td>
                    <td><input type="password" name="contrasenia"></td>
                </tr>
                <tr>
                    <td colspan = 2 align = center><input type="submit" value="Enviar"></td>
                </tr>
            </form>
    </table>
</body>
</html>