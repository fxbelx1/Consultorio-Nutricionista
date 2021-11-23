<?php
    session_start();
    $usuario = $_SESSION['ola'];

    if(isset($_POST['logout'])){
        session_destroy();
        header("location: login.php");
    }
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
    <form method="POST">
        <header>
            <img class="logo" src="../IMAGENES/logo7.png" alt="Logo del Consultorio">
            <nav>
                <ul class="nav_elements">
                    <li><a href="#" style="font-weight:bold;">Pacientes</a></li>
                    <input value="Cerrar sesión" type="submit" name="logout">
                    <!--<li><a href="#" name="logout">Cerrar sesión</a></li>-->
                    <li style="display:inline-flex"><i class="fas fa-user" style="margin-right: 10px; margin-top: 4px;"></i><p><?= $usuario ?></p></li>
                </ul>
            </nav> 
        </header>
    </form>
    <!------------------------ HEADER ------------------------->


    <!------------------------ BUSQUEDA ------------------------->
    <div class="lp_cont">
        <br><br><br><br><br><br><br>
        <form action="lista_pacientes.php" method="POST">
        <table class="buscador">
            <tr>
                <td><p>Buscar por:</p></td>
                <td>
                    <select name="op">
                        <option value="nombre">Nombre</option>
                        <option value="id">Id</option>
                    </select>
                </td>
                <td>
                    <input type="text" class="busqueda" name="busqueda" placeholder="Ingrese el dato a buscar">
                </td>
                <td>
                    <input type="submit" value="Buscar">
                </td>
                <!--<td><button type="submit" class="buscar">Buscar</button></td>-->
                <td><button type="submit" class="npaciente"><a href="../HTML/registrar_paciente.php">Nuevo paciente</a></button></td>
            </tr>
        </table>
        </form>
        <!------------------------ BUSQUEDA ------------------------->

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

<!-----------Código PHP----------------->
            <?php
                require 'Conexion.php';
                $op = $_POST['op'];
                $busqueda = $_POST['busqueda'];

                if($busqueda == NULL){
                    $sql = "SELECT Id, Nombre, Apellido_P, Apellido_M, Telefono FROM info_paciente";
                    $datos = mysqli_query($conexion, $sql);
                }

                else if($op == "nombre"){
                    $sql = "SELECT Id, Nombre, Apellido_P, Apellido_M, Telefono FROM info_paciente WHERE Nombre = '$busqueda'";
                    $datos = mysqli_query($conexion, $sql);
                }
                else if($op == "id"){
                    $sql = "SELECT Id, Nombre, Apellido_P, Apellido_M, Telefono FROM info_paciente WHERE Id = '$busqueda'";
                    $datos = mysqli_query($conexion, $sql);
                }

                while($mostrar = mysqli_fetch_array($datos)){
            ?>

            <tr>
                <td><p> <?php echo $mostrar['Id'] ?> </p></td>
                <td><p> <?php echo $mostrar['Nombre']; echo $mostrar['Apellido_P']; echo $mostrar['Apellido_M'] ?> </p></td>
                <td><p> <?php echo $mostrar['Telefono'] ?> </p></td>
                <td><a href="#">Expediente</a></td>
                <td><a href="consulta_paciente.php?prueba=<?=$mostrar['Id']?>">Nueva consulta</a></td>
                <td><a href="#">Actualizar menú</a></td>
            </tr>

            <?php
            }
            ?>
        </div>
    </div>
    
</body>
</html>