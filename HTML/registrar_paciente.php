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
        <form class="formconsu" action="registro_p.php" method="POST">
            <div class="izquierda">
                <h1 class="encabezados">Nuevo Paciente</h1>
                <table>
                    <TR>
                        <TD>
                            <label for="name">Nombre:</label><br>
                            <input type="text" name="nombre" placeholder="Nombre">
                        </TD> 
                        <TD>                    
                            <label for="Ap_Paterno">Apellido Paterno:</label><br>
                            <input type="text" name="ap_p" placeholder="Apellido Paterno">
                        </TD> 
                        <TD>                    
                            <label for="Ap_Materno">Apellido Materno:</label><br>
                            <input type="text" name="ap_m" placeholder="Apellido Materno">
                        </TD>
                    </TR>

                </table>
                <br>

                <table>
                    <TR>
                        <TD>
                            <label for="Age">Edad:</label><br>
                            <input type="value" name="edad" placeholder="Edad">
                        <TD>                    
                        <td>
                            <label for="Sexo">Sexo:</label><br>
                            <select name="sexo">
                                <option value="1">Hombre</option>
                                <option value="2">Mujer</option>
                            </select>
                        </td>
                    </TR>
                </table>                    

                <br>
                <p>Fecha de Nacimiento</p>
                <table>
                    <TR>
                        <TD>
                            <label for="day">Dia:</label><br>
                            <input type="number" name="nac_dia" min="1" max="31" placeholder="Dia">
                        </TD> 
                        <TD>                    
                            <label for="Month">Mes:</label><br>
                            <select name="nac_mes">
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
                            </select>
                        </TD> 
                        <TD>                    
                            <label for="Year">Año:</label><br>
                            <input type="number" name="nac_año" min="1921" max="2021" placeholder="Año">
                        </TD>
                    </TR>
                </table>                    

                <br>

                <p>Contacto</p>
                <table>
                    <TR>
                        <TD>
                            <label for="Telefono">Telefono:</label><br>
                            <input type="tel" name="tel" placeholder="Numero de telefono">
                        </TD> 
                        <TD>                    
                            <label for="mail">Correo electrónico:</label><br>
                            <input type="email" name="correo" placeholder="Correo electronico">
                        </TD> 
                    </TR>
                </table>
            </div> 


            <div class="derecha">
                <form class="formconsu2" action="registrar_paciente.php" method="POST" >
                <table class="tablas">
                    <TR>
                        <TD>
                            <label for="enfermedades">Enfermedades:</label><br>
                            <textarea cols="25" rows="4" id="enfermedades" name="enfermedades" placeholder="Describa las enfermedades"></textarea>
                        </TD> 
                        <TD>                    
                            <label for="alergias">Alergias:</label><br>
                            <textarea cols="25" rows="4" id="alergias" name="alergias" placeholder="Describa las alergias"></textarea>
                        </TD> 
                    </TR>
                </table>

                <br>

                <table>
                    <TR>
                        <TD>
                            <label for="Dalimenticios">Disgustos alimenticios:</label><br>
                            <textarea cols="25" rows="4" id="Dalimenticios" name="disgustos" placeholder="Describe los disgustos alimenticios"></textarea>
                        </TD> 
                    </TR>
                    </table>                    

                <br>

                <table class="tablas">
                    <TR>
                        <TD>
                            <p>Realizas actividad fisica:</p>
                            <select name="act_fisica">                                    
                                <option value="1">Si</option>
                                <option value="0">No</option>
                            </select>
                        </TD>

                        <TD>   
                            <p>Consume tabaco:</p>                 
                            <select name="tabaco">
                                <option value="1">Si</option>
                                <option value="0">No</option>
                            </select>
                        </TD>

                        <TD>        
                            <p>Consume alcohol:</p>            
                            <select name="al">
                                <option value="1">Si</option>
                                <option value="0">No</option>
                            </select>
                        </TD>                         
                    </TR>
                </table><br><br><br>
                <input type="submit">
<!-- <button class="boton3"><a href="../HTML/consulta_paciente.php">Registrar paciente</a></button> -->
        </form>
        </div> 
    </div> 
</body>
</html>