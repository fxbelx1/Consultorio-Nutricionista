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
        <title>Login </title>
        <link rel="stylesheet" href="../CSS/index_diseño.css">

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
                <li><a href="../HTML/index.html">Regresar</a></li>
            </ul>
        </nav> 
    </header>

    <!------------------------ INTRODUCCIÓN ------------------------->

    <div class="principal">
        <br><br><br><br><br><br><br>
        <h1>Iniciar Sesión</h1>
        <p>Si ya es paciente puede ingresar el id y contraseña otorgada en su consulta para acceder a 
            su expediente y menú.
        </p>
    </div>

    <!------------------------ FORM INICIO DE SESIÓN PACIENTE ------------------------->
    <div class="cont_formulario">
        <form class="formulario" action="#" method="#">
            <div>
                <!--<label for="id">Id:</label>-->
                <input type="text" id="id" name="id_nutriologa" placeholder="Ingrese su Id">

                <!--<label for="pass">Contraseña:</label>-->
                <input type="password" id="pass" name="pass_nutriologa" placeholder="Ingrese su contraseña">

                <button type="submit"><a href="../HTML/lista_pacientes.php">Iniciar Sesión</a></button>
            </div>
        </form>

    </div>

</body>
</html>