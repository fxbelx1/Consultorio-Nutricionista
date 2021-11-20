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
    <title>Nuevo paciente</title>
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
                <li><a href="../HTML/lista_pacientes.html">Pacientes</a></li>
                <li><a href="#">Cerrar sesión</a></li>
                <!--En la etiqueta p, va el nombre de la persona que inicio sesión-->
                <li style="display:inline-flex"><i class="fas fa-user" style="margin-right: 10px; margin-top: 4px;"></i><p>Usuario</p></li>
            </ul>
        </nav> 
    </header>
    <!------------------------ HEADER ------------------------->
    <br><br><br><br><br><br>
    <div class="contenido2">
        <div class="izquierda">
        <form class="formconsu">

                <p class="encabezados">Nuevo Paciente</p>

                    <table>
                    <TR>
                        <TD>
                            <label for="name">Nombre:</label><br>
                            <input type="text" id="name" name="user_name" placeholder="Nombre"></TD> 
                        <TD>                    
                            <label for="Ap_Paterno">Apellido Paterno:</label><br>
                            <input type="text" id="Ap_Paterno" name="user_Ap_Paterno" placeholder="Apellido Paterno"></TD> 
                        <TD>                    
                            <label for="Ap_Materno">Apellido Materno:</label><br>
                            <input type="text" id="Ap_Materno" name="user_Ap_Materno" placeholder="Apellido Materno"></TD>
                    </TR>
                    </table>

                    <br>

                    <table>
                    <TR>
                        <TD>
                    <label for="Age">Edad:</label><br>
                    <input type="value" id="Age" name="user_Age" placeholder="Edad">
                        <TD>                    
                    <label for="Sexo">Sexo:</label><br>
                    <select name="user_Sexo">
                        <option value="1">Hombre</option>
                        <option value="2">Mujer</option>
                    </select>
                    </TR>
                    </table>                    

                <br>
                <p>Fecha de Nacimiento</p>

                    <table>
                    <TR>
                        <TD>
                    <label for="day">Dia:</label><br>
                    <input type="number" id="day" name="user_day" min="1" max="31" placeholder="Dia"></TD> 
                        <TD>                    
                    <label for="Month">Mes:</label><br>
                        <select name="user_Mes">
                        <option value="1">Enero</option>
                        <option value="2">Febrero</option>
                        <option value="3">Marzo</option>
                        <option value="4">Abril</option>
                        <option value="5">Mayo</option>
                        <option value="6">Junio</option>
                        <option value="7">Julio</option>
                        <option value="8">Agosto</option>
                        <option value="9">Septiembre</option>
                        <option value="10">Octubre</option>
                        <option value="11">Noviembre</option>
                        <option value="12">Diciembre</option>
                    </select></TD> 
                        <TD>                    
                        <label for="Year">Año:</label><br>
                    <input type="number" id="year" name="user_year" min="1921" max="2021" placeholder="Año"></TD>
                    </TR>
                    </table>                    

                    <br>

                <p>Contacto</p>
                    <table>
                    <TR>
                        <TD>
                    <label for="Telefono">Telefono:</label><br>
                    <input type="tel" id="Telefono" name="user_Telefono" placeholder="Numero de telefono"></TD> 
                        <TD>                    
                    <label for="mail">Correo electrónico:</label><br>
                    <input type="email" id="email" name="user_mail" placeholder="Correo electronico"></TD> 
                    </TR>
                    </table>

        </form>
        </div> 


        <div class="derecha">
        <form class="formconsu2">

                    <table class="tablas">
                    <TR>
                        <TD>
                            <label for="enfermedades">Enfermedades:</label><br>
                            <textarea cols="25" rows="4" id="enfermedades" name="user_enfermedades" placeholder="Describa las enfermedades"></textarea></TD> 
                        <TD>                    
                            <label for="alergias">Alergias:</label><br>
                            <textarea cols="25" rows="4" id="alergias" name="user_alergias" placeholder="Describa las alergias"></textarea></TD> 
                    </TR>
                    </table>

                    <br>

                    <table>
                    <TR>
                        <TD>
                    <label for="Dalimenticios">Disgustos alimenticios:</label><br>
                    <textarea cols="25" rows="4" id="Dalimenticios" name="user_Dalimenticios" placeholder="Describe los disgustos alimenticios"></textarea></TD> 
                    </TR>
                    </table>                    

                <br>

                    <table class="tablas">
                    <TR>
                        <TD>
                            <p>Realizas actividad fisica:</p>
                              <label for="html" class="radio">Si</label>
                              <input type="radio" id="css" name="fav_language" value="CSS"><br>
                                <label for="html" class="radio">No</label>
                              <input type="radio" id="css" name="fav_language" value="CSS">
                        </TD>
                        <td><br></td> 
                        <TD>   
                        <p>Consume tabaco:</p>                 
                              <label for="html" class="radio">Si</label>
                              <input type="radio" id="css" name="fav_language" value="CSS"><br>
                                <label for="html" class="radio">No</label>
                              <input type="radio" id="css" name="fav_language" value="CSS">
                        </TD>
                        <TD>        
                        <p>Consume alcohol:</p>            
                              <label for="html" class="radio">Si</label>
                              <input type="radio" id="css" name="fav_language"><br>
                                <label for="html" class="radio">No</label>
                              <input type="radio" id="css" name="fav_language">
                        </TD> 
                    </TR>
                    </table><br><br><br>
                    <button class="boton3"><a href="../HTML/consulta_paciente.php">Registrar paciente</a></button>
        </form>
        </div> 
        </div> 
</body>
</html>