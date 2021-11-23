<?php
    $id=$_GET['prueba'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva consulta del paciente</title>
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

<body class="grin-container">
    <!------------------------ HEADER ------------------------->
    <header>
        <img class="logo" src="../IMAGENES/logo7.png" alt="Logo del Consultorio">
        <nav>
            <ul class="nav_elements">
                <!--Inicio, servicios, iniciar sesión, contacto-->
                <li><a href="../HTML/lista_pacientes.html">Pacientes</a></li>
                <li><a href="#">Cerrar sesión</a></li>
                <!--En la etiqueta p, va el nombre de la persona que inicio sesión-->
                <li style="display:inline-flex"><i class="fas fa-user" style="margin-right: 10px; margin-top: 4px;"></i><p>Usuario</p></li>
            </ul>
        </nav> 
    </header>
    <!------------------------ HEADER ------------------------->
    <!--<div class="contenido">-->

        <!------------------------ DATOS DEL PACIENTE (IZQUIERDA) ------------------------->
        <?php
            require 'Conexion.php';
            $sql = "SELECT * FROM info_paciente WHERE Id = '$id'";
            $datos = mysqli_query($conexion, $sql);
            $mostrar = mysqli_fetch_array($datos);

        ?>


        <div class="datos_paciente">
            <br><br><br><br><br><br>
            <h1 >Nueva consulta</h1>

            <form class="formconsu">
                <table></table>
                <label for="fecha_consulta">Fecha de la consulta:</label><br>
                <p> Fecha de ejemplo</p>

                <label for="paciente"> Paciente:</label>
                <p><?php echo $mostrar['Nombre'] ?></p>

                <label for="edad"> Edad:</label>
                <p><?php echo $mostrar['Edad'] ?></p>

                <label> Sexo:</label>
                <p><?php echo $mostrar['Sexo'] ?></p>

                <label for="nacimiento">Fecha de nacimiento:</label>
                <p><?php echo $mostrar['Dia']; echo $mostrar['Mes']; echo $mostrar['Año']; ?></p>

                <label for="endermedades">Enfermedades:</label>
                <p><?php echo $mostrar['Enfermedades'] ?></p>

                <label for="alergias">Alergias:</label>
                <p><?php echo $mostrar['Alergias'] ?></p>

                <label for="disgustos">Disgustos alimenticios:</label>
                <p><?php echo $mostrar['Disgustos'] ?></p>

                <label>Actividad fisica:</label>
                <p><?php echo $mostrar['Act_Fisica'] ?></p>

                <label>Tabaco:</label>
                <p><?php echo $mostrar['Tabaco'] ?></p>

                <label>Alcohol:</label>
                <p><?php echo $mostrar['Alcohol'] ?></p>
                
            </form>
            <button class="boton1" type="submit">Modificar datos</button>
        </div>
        <!------------------------ DATOS DEL PACIENTE (IZQUIERDA) ------------------------->

        <!------------------------ CALCULOS ANTROPOMETRICOS (DERECHA) ------------------------->
        <div class="calculos">
            <br><br><br>
            <form class="formconsu2">
                <table class="tablas">
                    <tbody>
                        <br><br>
                    <tr>
                        <td rowspan="2"> Ingrese el nuevo peso y estatura del paciente: &nbsp;&nbsp;&nbsp;</td>
                        <td><label for="peso">Peso:</label></td>
                        <td><label for="estatura">Estatura:</label></td>
                    </tr>
                    <tr>
                        <td><input type="number" name="peso" min="0">&nbsp;Kg</td>
                        <td><input type="number" name="estatura">&nbsp;m</td>
                    </tr>
                    </tbody>
                </table>
                <br><br>

                <div>
                    <div class="calculos1">
                        <table class="tablas">
                            <tr>
                                <td>IMC</td>
                            </tr>
                            <tr>
                                <td><input type="number" name="imc"></td>
                            </tr>
                            <tr>
                                <td><br></td>
                            </tr>
                            <tr>
                                <td>% grasa</td>
                            </tr>
                            <tr>
                                <td><input type="number" name="grasa">%</td>
                            </tr>
                            <tr>
                                <td><br></td>
                            </tr>
                            <tr>
                                <td>Masa muscular</td>
                            </tr>
                            <tr>
                                <td><input type="number" name="masamusc">Kg</td>
                            </tr>
                        </table>
                    </div>

                    <div class="calculos2">
                        <table class="tablas">
                            <tr>
                                <td></td>
                                <td colspan="2"><label for="knecesarias">Kilocalorias necesarias para la dieta</label></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan="1">
                                    <input type="number" name="knecesarias">
                                </td>
                                <td>Kcal</td>
                                <td></td>
                            </tr> 
                            <tr>
                                <td colspan="4"><br></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Porcentaje</td>
                                <td>Kcal</td>
                                <td>Gramos</td>
                            </tr>
                            <tr>
                                <td>HCO</td>
                                <td><input type="number" name=""></td>
                                <td><input type="number" name=""></td>
                                <td><input type="number" name=""></td>
                            </tr>
                            <tr>
                                <td><br></td>
                            </tr>
                            <tr>
                                <td>Lip</td>
                                <td><input type="number" name=""></td>
                                <td><input type="number" name=""></td>
                                <td><input type="number" name=""></td>
                            </tr>   
                            <tr>
                                <td><br></td>
                            </tr>  
                            <tr>
                                <td>Pro</td>
                                <td><input type="number" name=""></td>
                                <td><input type="number" name=""></td>
                                <td><input type="number" name=""></td>
                            </tr>  
                        </table>
                    </div>
                </div>
            </form>
            <br><br><br><br><br><br><br><br><br><br><br>
            <button class="boton2"><a href="../HTML/menu_paciente.php">Guardar Datos</a></button> 
        </div>
        <!------------------------ CALCULOS ANTROPOMETRICOS (DERECHA) ------------------------->
    <!--</div>-->

</body>
</html>
