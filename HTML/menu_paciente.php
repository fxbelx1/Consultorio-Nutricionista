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
    <title>Creación de menú</title>
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
    <div class="contenido">
        <div class="datos_paciente">
            <h1 class="encabezados">Nueva consulta</h1>

            <form class="formconsu">
                <label for="fecha_consulta">Fecha de la consulta:</label><br>
                 <p class="encabezados">Fecha de ejemplo</p>

                <label for="paciente"> Paciente:</label>
                <p class="encabezados">Priscila</p>
                <label for="edad"> Edad:</label>
                <p class="encabezados">21</p>

                <label> Sexo:</label>
                <p class="encabezados">Femenino</p>

                <label for="nacimiento">Fecha de nacimiento:</label>
                <p class="encabezados">10 de Julio 2000</p>
                <label for="endermedades">Enfermedades:</label>
                <p class="encabezados">Asma</p>
                <label for="alergias">Alergias:</label>
                <p class="encabezados">Ninguna</p>
                <label for="disgustos">Disgustos alimenticios:</label>
                <p class="encabezados">Queso crema, ajo y leche</p>

                <label>Actividad fisica:</label>
                <input type="radio" name="actfi">Si
                <input type="radio" name="actfi">No<br><br>
                <label>Tabaco:</label>
                <input type="radio" name="tabaco">Si
                <input type="radio" name="tabaco">No<br><br>
                <label>Alcohol:</label>
                <input type="radio" name="alcohol">Si
                <input type="radio" name="alcohol">No<br><br>
            </form>
            <button class="boton1">Modificar datos</button>
        </div>


        <div class="calculos">

            <div>
            <div class="calculos1">
                    <table border="1" width="900">
                        <tr>
                            <td>

                            </td>
                           
                            <td>
                                <label>Eq</label> 
                            </td>
                            <td>
                                <label>Kcal</label> 
                            </td>
                            <td>
                                <label>Pro</label> 
                            </td>
                            <td>
                                <label>Lip</label> 
                            </td>
                            <td>
                                <label>HCO</label> 
                            </td>
                        </tr>
                        <tr>
                            <td>
                             <label>Verduras</label> 
                         </td>
                         <td>

                         </td>
                         <td>

                         </td>
                         <td>

                         </td>
                         <td>

                         </td>
                         <td>

                         </td>
                         
                     </tr>
                     <tr>
                        <td>
                            <label>Frutas</label> 
                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                       
                    </tr>
                    <tr>
                        <td>
                            <label>Cereales C/G</label> 
                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                      
                    </tr>
                    <tr>
                        <td>
                            <label>Leguminosas</label> 
                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                       
                    </tr>
                    <tr>
                        <td>
                            <label>AOA MBAG</label> 
                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                      
                    </tr>
                    <tr>
                        <td>
                            <label>AOA BAG</label> 
                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                       
                    </tr>
                    <tr>
                        <td>
                            <label>AOA MAG</label> 
                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                     
                    </tr>
                    <tr>
                        <td>
                            <label>AOA AAG</label> 
                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                       
                    </tr>
                    <tr>
                        <td>
                            <label>Leche Des</label> 
                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            <label>Leche Semi</label> 
                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                       
                    </tr>
                    <tr>
                        <td>
                            <label>Leche Entera</label> 
                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                       
                    </tr>
                    <tr>
                        <td>
                            <label>Leche C/A</label> 
                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            <label>Aceites S/P</label> 
                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                      
                    </tr>
                    <tr>
                        <td>
                            <label>Aceites C/P</label> 
                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                       
                    </tr>

                    <tr>
                        <td>

                        </td>
                        <td>
                            <label>Suma</label> 
                        </td>
                        <td>
                            
                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        
                    </tr>
                    <tr>
                        <td>

                        </td>
                        <td>
                            <label>Meta</label> 
                        </td>
                        <td>
                            
                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        
                    </tr>
                    <tr>
                        <td>

                        </td>
                        <td>
                            <label>%</label> 
                        </td>
                        <td>
                            
                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        
                    </tr>
                </table>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <div class="calculos1">
                <h1>Menú</h1>
                <table border="1" width="900">
                    <tr>
                        <td>
                        </td>
                        <td>
                            <label>Domingo</label>
                        </td>
                        <td>
                            <label>Lunes</label>
                        </td>
                        <td>
                            <label>Martes</label> 
                        </td>
                        <td>
                            <label>Miercoles</label> 
                        </td>
                        <td>
                            <label>Jueves</label> 
                        </td>
                        <td>
                            <label>Viernes</label> 
                        </td>
                        <td>
                            <label>Sabado</label> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                         <label>Desayuno</label> 
                     </td>
                     <td>

                     </td>
                     <td>

                     </td>
                     <td>

                     </td>
                     <td>

                     </td>
                     <td>

                     </td>
                     <td>

                     </td>
                     <td>
                         
                     </td>                     
                 </tr>
                 <tr>
                    <td>
                        <label>Colacion 1</label> 
                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                     <td>
                         
                     </td>                       
                </tr>
                <tr>
                    <td>
                        <label>Comida</label> 
                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                     <td>
                         
                     </td>                       
                </tr>
                <tr>
                    <td>
                        <label>Colacion 2</label> 
                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                     <td>
                         
                     </td>   
                </tr>
                <tr>
                    <td>
                        <label>Cena</label> 
                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                     <td>
                         
                     </td>   
                </tr>
            </table>
            <br><br>
            <button class="boton2">Guardar y terminar consulta</button> 
        </div>
    </div>
</div>
</div>
</body>
</html>