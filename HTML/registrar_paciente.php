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


    <!------------------------ FORM ------------------------->
    <!--<h1 class="titulo-reg">Nuevo Paciente</h1>-->
    <form class="form-reg" action="registro_p.php" method="POST">
        <div class="reg-grid">
            <div class="datos-reg">
                
                <h1>Datos personales</h1>
                <table class="datos-pers">
                    <TR>
                        <TD>
                            <label for="name">Nombre(s):</label>
                            <input type="text" name="nombre">
                        </TD> 
                        <TD>                    
                            <label for="Ap_Paterno">Apellido Paterno:</label>
                            <input type="text" name="ap_p">
                        </TD> 
                        <TD>                    
                            <label for="Ap_Materno">Apellido Materno:</label>
                            <input type="text" name="ap_m">
                        </TD>
                    </TR>

                    <TR>
                        <TD>
                            <label for="Age">Edad:</label>
                            <input type="value" name="edad">
                        </TD>                    
                        <td>
                            <label for="Sexo" style="position: relative; top: -14px;" >Sexo:</label>
                            <select name="sexo">
                                <option value="1">Hombre</option>
                                <option value="2">Mujer</option>
                            </select>
                        </td>
                    </TR>                  

                    <!--<p>Fecha de Nacimiento</p>-->
                    <TR>
                        <TD>
                            <label for="day">Dia de nacimiento:</label>
                            <input type="number" name="nac_dia" min="1" max="31">
                        </TD> 
                        <TD>                    
                            <label for="Month" style="position: relative; top: -14px;">Mes de nacimiento:</label>
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
                            <label for="Year">Año de nacimiento:</label>
                            <input type="number" name="nac_año" min="1921" max="2021">
                        </TD>
                    </TR>                   

                    <!--<p>Contacto</p>-->
                    <TR>
                        <TD>
                            <label for="Telefono">Telefono:</label>
                            <input type="tel" name="tel">
                        </TD> 
                        <TD>                    
                            <label for="mail">Correo electrónico:</label>
                            <input type="email" name="correo">
                        </TD> 
                    </TR>
                </table>
            </div> 
            <!-- izquierda -->

            <!-- derecha -->
            <div class="datos-reg">
                <h1>Datos dieteticos</h1>
                <!--<form class="formconsu2" action="registrar_paciente.php" method="POST" >-->
                <table class="datos-pers">
                    <TR>
                        <TD>
                            <label for="enfermedades">Enfermedades:</label>
                            <textarea cols="25" rows="4" id="enfermedades" name="enfermedades" placeholder="Describa las enfermedades"></textarea>
                        </TD> 
                        <TD>                    
                            <label for="alergias">Alergias:</label>
                            <textarea cols="25" rows="4" id="alergias" name="alergias" placeholder="Describa las alergias"></textarea>
                        </TD> 
                    </TR>

                    <TR>
                        <TD>
                            <label for="Dalimenticios">Disgustos alimenticios:</label>
                            <textarea cols="25" rows="4" id="Dalimenticios" name="disgustos" placeholder="Describe los disgustos alimenticios"></textarea>
                        </TD> 
                    </TR>

                    <table class="datos-pers" style="margin-top: 10px; margin-bottom: 15px">
                    <TR>
                        <TD>
                            <label style="position: relative; top: -14px;">Realizas actividad fisica:</label>
                            <select name="act_fisica" style="padding-inline: 60px">                                    
                                <option value="1">Si</option>
                                <option value="0">No</option>
                            </select>
                        </TD>

                        <TD>   
                            <label style="position: relative; top: -14px;">Consume tabaco:</label>                 
                            <select name="tabaco" style="padding-inline: 60px">
                                <option value="1">Si</option>
                                <option value="0">No</option>
                            </select>
                        </TD>

                        <TD>        
                            <label style="position: relative; top: -14px;">Consume alcohol:</label>            
                            <select name="al" style="padding-inline: 60px">
                                <option value="1">Si</option>
                                <option value="0">No</option>
                            </select>
                        </TD>                         
                    </TR>
                    </table>
                </table>

                <div>
                    <input type="submit" class="boton">
                </div>

                <!--
                <button class="boton3"><a href="../HTML/consulta_paciente.php">Registrar paciente</a></button> -->
            </div>
            <!-- derecha -->
        <div>
    </form> 
    <!------------------------ FORM ------------------------->
</body>
</html>