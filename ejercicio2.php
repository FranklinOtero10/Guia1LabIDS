<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
</head>
<body bgcolor = "skyblue">
    <h1>Ingrese los datos</h1>
    <table border = "1">
        <form method = "POST" action="datosejercicio2.php">
        <tr>
            <td>Ingrese su nombre: </td>
            <td><input type="text" name="nombre" required></td>
        </tr>

        <tr>
            <td>Ingrese su apellido: </td>
            <td><input type="text" name="apellido" required></td>
        </tr>

        <tr>
            <td>Sexo</td>
            <td>
            <input type="radio" name = "sexo" value = "masculino">Masculino <br>
            <input type="radio" name = "sexo" value = "femenino" >Femenino
            </td>
        </tr>

        <tr>
            <td>Pais de origen</td>
            <td>
                <input list="paises" name = "pais" id="pais">
                <datalist id = "paises">
                    <option value="El Salvador">
                    <option value="USA">
                    <option value="Argentina">
                    <option value="Japón">
                    <option value="Otro Pais">
                </datalist>
            </td>
        </tr>

        <tr>
            <td>Pasatiempos</td>
            <td>
                <input type="checkbox" name = "pasa" value = "Internet">Internet <br>
                <input type="checkbox" name = "pasa1" value = "TV y Cine">TV y Cine
            </td>
        </tr>

        <tr>
            <td>Observaciones</td>
            <td><textarea name="observaciones" id="observaciones" cols="25" rows="7"></textarea></td>
        </tr>

        <tr>
            <td align = center><input type="submit" value = "Enviar"></td>
            <td align = center><input type="reset" value = "Limpiar"></td>
        </tr>

    </table>
    </form>
</body>
</html>