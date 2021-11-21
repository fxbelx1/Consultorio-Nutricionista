<?php
$servername = "localhost";
$database = "nutrisystem";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de pacientes</title>
    <link rel="stylesheet" href="../CSS/index_diseño.css">

    <!------------------------ ICONOS ------------------------->
    <script src="https://kit.fontawesome.com/b95e5a2fac.js" crossorigin="anonymous"></script>

    <!------------------------ FUENTES ------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">  

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap" rel="stylesheet">
</head>

<body>
    <!------------------------ HEADER ------------------------->
    <header>
        <img class="logo" src="../IMAGENES/logo7.png" alt="Logo del Consultorio">
        <nav>
            <ul class="nav_elements">
                <!--Inicio, servicios, iniciar sesión, contacto-->
                <li><a href="#" style="font-weight:bold;">Pacientes</a></li>
                <li><a href="#">Cerrar sesión</a></li>
                <!--En la etiqueta p, va el nombre de la persona que inicio sesión-->
                <li style="display:inline-flex"><i class="fas fa-user" style="margin-right: 10px; margin-top: 4px;"></i><p>Usuario</p></li>
            </ul>
        </nav> 
    </header>
    <!------------------------ HEADER ------------------------->

    <div class="lp_cont">
        <br><br><br><br><br><br><br>
        <form>
        <table class="buscador">
            <tr>
                <td><p>Buscar por:</p></td>
                <td>
                    <select>
                        <option value="nombre">Nombre</option>
                        <option value="id">Id</option>
                    </select>
                </td>
                <td>
                    <input type="text" class="busqueda" name="busqueda" placeholder="Ingrese el dato a buscar">
                </td>
                <td><button type="submit" class="buscar">Buscar</button></td>
                <td><button type="submit" class="npaciente"><a href="../HTML/registrar_paciente.php">Nuevo paciente</a></button></td>
            </tr>
        </table>

        <br><br>
        <table class="datos">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th style="color: white;">Expediente</th>
                <th style="color: white;">Nueva consulta</th>
                <th style="color: white;">Actualizar Menú</th>
            </tr>

            <!--Aqui comenzaria el php (while) para repetir el tr hasta que se muestren todos los datos de la tabla-->
            <tr>
                <td><p>001</p></td>
                <td><p>Eduardo</p></td>
                <td><p>123456789</p></td>
                <td><a href="#">Expediente</a></td>
                <td><a href="#">Nueva consulta</a></td>
                <td><a href="#">Actualizar menú</a></td>
            </tr>
        </form>
        </div>
    </div>
    
</body>
</html>