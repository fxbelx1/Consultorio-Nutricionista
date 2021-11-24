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
    <link rel="stylesheet" href="../CSS/index_diseño.css?ts=<?=time()?>">

    <!------------------------ ICONOS ------------------------->
    <script src="https://kit.fontawesome.com/b95e5a2fac.js" crossorigin="anonymous"></script>

    <!------------------------ FUENTES ------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">  

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap" rel="stylesheet">

<!------------------------ SCRIPT ------------------------->
    <script>
        function calculos(){
            /**********IMC**********/
            var peso = document.getElementById("peso").value;
            var estatura = document.getElementById("es").value;

            var imc = peso/estatura;
            document.getElementById("imc").innerHTML = imc.toFixed(2);

            /**********GRASA**********/
            if(sexo == 1){
                var grasa = (1.2*imc) + (0.23*edad) - 10.8 - 5.4;
                globalThis.kcal = (10*peso) + (6.25*(estatura*100)) - (5*edad) + 5; 
            }
            else{
                var grasa = (1.2*imc) + (0.23*edad) - 5.4;
                globalThis.kcal = (10*peso) + (6.25*(estatura*100)) - (5*edad) - 161;
            }
            document.getElementById("grasa").innerHTML = grasa.toFixed(2) + " %";

            /**********MASA**********/
            var masa = peso - (grasa/100)*peso;
            document.getElementById("masa").innerHTML = masa.toFixed(2) + " Kg";

            /**********KCAL**********/
            document.getElementById("kcal").innerHTML = kcal.toFixed(2) + " Kcal";
        }
    </script>
<!------------------------ SCRIPT ------------------------->

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
                <p>
                    <?php 
                        echo $mostrar['Edad']; 
                        $edad1 = $mostrar['Edad'];
                    ?>
                    <script>
                        var edad = '<?=$edad1?>';
                    </script>
                </p>

                <label> Sexo:</label>
                <p>
                    <?php 
                        echo $mostrar['Sexo'];
                        $sexo1 = $mostrar['Sexo'];
                    ?>
                    <script>
                        var sexo = '<?=$sexo1?>';
                    </script>
                </p>

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
            <!------------------------ ESTATURA Y PESO ------------------------->
            <form action="pruebas.php" method="POST" >
                <table class="tablas" style="margin-left: 20px;">
                    <tbody>
                        <br><br>
                    <tr>
                        <td rowspan="2"> Ingrese el nuevo peso y estatura del paciente: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td><label for="peso">Peso:</label></td>
                        <td><label for="estatura">Estatura:</label></td>
                    </tr>
                    <tr>
                        <td><input type="number" name="peso" min="0" id="peso" style="width: 100px;">Kg&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td><input type="number" name="estatura" id="es" style="width: 100px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td style="width: 14.28%;"><a href="#" onclick="calculos()"><button class="cons_boton">Calcular</button></a></td>
                    </tr>
                    </tbody>
                </table>
                <!------------------------ ESTATURA Y PESO ------------------------->
                <br><br>
                <hr>
                <br><br>
                <!------------------------ CALCULOS ------------------------->
                <div>
                    <div class="calculos1" style="margin-left: 20px; width: 900px">
                        <table class="tablas">
                            <tr>
                                <td style="width: 3%;"><p style="width: 14.28%; font-weight: bold;">IMC</p></td>
                                <td style="width: 9%;"><p id="imc" style="background-color: white;">0</p></td>
                                <td style="width: 2%"></td>
                                <td style="width: 6%; font-weight: bold;">% grasa</td>
                                <td style="width: 9%;"><p id="grasa" style="background-color: white;">0</p></td>
                                <td style="width: 2%;"></td>
                                <td style="width: 10%; font-weight: bold;">Masa muscular</td>
                                <td style="width: 9%;"><p id="masa" style="background-color: white;">0</p></td>
                            </tr>
                        </table>
                    </div>
                    <!------------------------ CALCULOS ------------------------->
                    <br><br>
                    <div class="calculos2">
                        <br><br>
                        <p>Kilocalorias necesarias para la dieta</p>
                        <!------------------------ KCAL ------------------------->
                        <table class="tablas">
                            <tr>
                                <td style="width: 50px;"><p style="font-weight: bold;">Kcal</p></td>
                                <td><p id="kcal" style="background-color: white; width: 200px;">0</p></td>
                                <td><td style="width: 200px;"><a href="#" onclick="macro()"><button style="margin-left: 20px;" class="cons_boton">Calcular</button></a></td></td>
                            </tr>
                        <table>
                            <!------------------------ KCAL ------------------------->
                        </br>

                        <script>
                            function macro(){
                                var hco = (document.getElementById("p_hco").value)/100;
                                var lip = (document.getElementById("p_lip").value)/100;
                                var pro = (document.getElementById("p_pro").value)/100;
                                
                                if((hco + lip + pro)<=1){
                                    document.getElementById("hco_p").innerHTML = (hco*kcal).toFixed(2);
                                    document.getElementById("lip_p").innerHTML = (lip*kcal).toFixed(2);
                                    document.getElementById("pro_p").innerHTML = (pro*kcal).toFixed(2);

                                    document.getElementById("hco_g").innerHTML = ((hco*kcal)/4).toFixed(2);
                                    document.getElementById("lip_g").innerHTML = ((lip*kcal)/9).toFixed(2);
                                    document.getElementById("pro_g").innerHTML = ((pro*kcal)/4).toFixed(2);
                                }
                            }
                        </script>

                        <!------------------------ PORCENTAJES ------------------------->
                        <table class="tablas">    
                            <tr>
                                <td class="por"></td>
                                <td>Porcentaje&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                <td style="width: 120px;">Kcal</td>
                                <td>Gramos</td>
                            </tr>
                            <tr>
                                <td class="por">HCO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                <td><input id="p_hco" type="number" style="width: 70px;"></td>
                                <td><p id="hco_p" style="background-color: white; width: 100px;">0</p></td>
                                <td><p id="hco_g" style="background-color: white; width: 100px;">0</p></td>
                            </tr>
                            <tr>
                                <td><br></td>
                            </tr>
                            <tr>
                                <td class="por">Lip</td>
                                <td><input id="p_lip" type="number" style="width: 70px;"></td>
                                <td><p id="lip_p" style="background-color: white; width: 100px;">0</p></td>
                                <td><p id="lip_g" style="background-color: white; width: 100px;">0</p></td>
                            </tr>   
                            <tr>
                                <td><br></td>
                            </tr>  
                            <tr>
                                <td class="por">Pro</td>
                                <td><input id="p_pro" type="number" style="width: 70px;"></td>
                                <td><p id="pro_p" style="background-color: white; width: 100px;">0</p></td>
                                <td><p id="pro_g" style="background-color: white; width: 100px;">0</p></td>
                            </tr>  
                        </table>
                        <!------------------------ PORCENTAJES ------------------------->
                    </div>
                </div>
                <br><br><br>
                <input type="submit" onclick="prueba()">
            </form>
        </div>
        <!------------------------ CALCULOS ANTROPOMETRICOS (DERECHA) ------------------------->
    <!--</div>-->

</body>
</html>
