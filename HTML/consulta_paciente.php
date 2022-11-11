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

    <!------------------------ JQUERY ------------------------->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!------------------------ SCRIPT ------------------------->
    <script>

        // OPERACIONES IMC, MASA MUSCULAR, %GRASA Y KCAL
        $( document ).ready(function(){
            var grasa, kcal;

            var sexo_edad = $("#sexo").text();
            var se_split = sexo_edad.split(" ");

            $("#peso, #es").on("input", function(){

                if(($("#peso").val() == 0) || ($("#es").val() == 0)){
                    $("#imc").text("0");
                    $("#grasa").text("0");
                    $("#kcal").text("0");
                    $("#masa").text("0");
                }
                else{
                    /* IMC */
                    var imc = ($("#peso").val())/($("#es").val());
                    $("#imc").text(imc.toFixed(2));

                    /* %GRASA */
                    if(se_split[1] == "Hombre"){
                        grasa = (1.2*imc) + (0.23*(se_split[2])) - 10.8 - 5.4;
                        kcal = (10*($("#peso").val())) + (6.25*(($("#es").val())*100)) - (5*(se_split[2])) + 5;
                    }
                    else{
                        if(se_split[1] == "Mujer"){
                            grasa = (1.2*imc) + (0.23*(se_split[2])) - 5.4;
                            kcal = (10*($("#peso").val())) + (6.25*(($("#es").val())*100)) - (5*(se_split[2])) - 161;
                        }
                    }

                    $("#grasa").text(grasa);

                    /* KCAL */
                    $("#kcal").text(kcal);

                    /* MASA */
                    var masa = ($("#peso").val()) - (grasa/100)*($("#peso").val());
                    $("#masa").text(masa);
                }
            });
        });
        // OPERACIONES IMC, MASA MUSCULAR, %GRASA Y KCAL
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

        <div class="cont-cons">
            <div class="datos_paciente">
                <i class="fas fa-solid fa-person" style="font-size: 70px; margin-inline: 47%; margin-top: 20px; margin-bottom: 15px;"></i>

                <h1><?php echo $mostrar['Nombre'] . " " . $mostrar['Apellido_P'] . " " . $mostrar['Apellido_M'] ?></h1>
                <p id="sexo" style="text-align: center;"> <?php 
                    if($mostrar['Sexo'] == 1){
                        echo "Hombre ";
                    }
                    else if($mostrar['Sexo'] == 2){
                        echo "Mujer, ";
                    } 
                    
                    echo $mostrar['Edad'] . " años";
                    ?>
                </p> <hr>

                <h3>Enfermedades</h3>
                <p><?php echo $mostrar['Enfermedades']; ?></p>
                <!--<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</p>-->

                <h3>Alergias</h3>
                <p><?php echo $mostrar['Alergias']; ?></p>
                <!--<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</p>-->

                <h3>Disgustos alimenticios</h3>
                <p><?php echo $mostrar['Disgustos']; ?></p>
                <!--<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</p>-->
                <hr>
                
                <div>
                    <h4>¿Realiza actividad fisica?</h4>
                    <p>
                        <?php 
                            if($mostrar['Act_Fisica'] == 1){
                                echo "Si";
                            }
                            else if($mostrar['Act_Fisica'] == 0){
                                echo "No";
                            }
                        ?>
                    </p>

                    <h4>¿Fuma?</h4>
                    <p>
                        <?php 
                            if($mostrar['Tabaco'] == 1){
                                echo "Si";
                            }
                            else if($mostrar['Tabaco'] == 0){
                                echo "No";
                            }
                        ?>
                    </p>

                    <h4>¿Consume bebidas alcoholicas?</h4>
                    <p>
                        <?php 
                            if($mostrar['Alcohol'] == 1){
                                echo "Si";
                            }
                            else if($mostrar['Alcohol'] == 0){
                                echo "No";
                            }
                        ?>
                    </p>
                </div>

                <button class="boton1" type="submit">Modificar datos</button>
            </div>
            <!------------------------ DATOS DEL PACIENTE (IZQUIERDA) ------------------------->






            <!------------------------ CALCULOS ANTROPOMETRICOS (DERECHA) ------------------------->
            <div class="calculos">
                <!------------------------ ESTATURA Y PESO ------------------------->
                <div class="uno">
                    <h1>Nueva consulta</h1>
                    <p>Ingrese el nuevo peso y estatura del paciente:</p>
                    <div class="estatura_peso">
                        <div>
                            <label>Peso:</label>
                            <input type="number" name="peso" min="0" id="peso" placeholder="Kilogramos">
                        </div>
                        <div>
                            <label>Estatura:</label>
                            <input type="number" name="estatura" id="es" placeholder="Metros">
                        </div>
                    </div>
                </div>
                    
                <!------------------------ ESTATURA Y PESO ------------------------->


                <!------------------------ CALCULOS ------------------------->
                <div class="cons_form">
                    <div class="calculos1">
                        <div>
                            <h1 id="siguiente">IMC</h1>
                            <p id="imc">0</p>
                        </div>

                        <div>
                            <h1>M MUSCULAR</h1>
                            <p id="masa">0</p>
                        </div>

                        <div>
                            <h1>% GRASA</h1>
                            <p id="grasa">0</p>
                        </div>

                        <div class="kcal">
                            <hr>
                            <h1>KCAL necesarias para la dieta:</h1>
                            <p id="kcal">0</p>
                            <a href="#siguiente" id="oculto"><i class="fa-solid fa-chevron-down" style="margin-right: 5px; font-size: 14px;"></i> siguiente </a>

                            <script>
                                $("#oculto").click(function(){
                                    $("#oculto").css("display", "none");
                                });
                            </script>

                        </div>
                    </div>
                    <!------------------------ CALCULOS ------------------------->
                    <div class="calculos2">
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
                                <td><input id="p_hco" type="number"></td>
                                <td><p id="hco_p" style="width: 100px;">0</p></td>
                                <td><p id="hco_g" style="width: 100px;">0</p></td>
                            </tr>
                            <tr>
                                <td><br></td>
                            </tr>
                            <tr>
                                <td class="por">Lip</td>
                                <td><input id="p_lip" type="number"></td>
                                <td><p id="lip_p" style="width: 100px;">0</p></td>
                                <td><p id="lip_g" style="width: 100px;">0</p></td>
                            </tr>   
                            <tr>
                                <td><br></td>
                            </tr>  
                            <tr>
                                <td class="por">Pro</td>
                                <td><input id="p_pro" type="number"></td>
                                <td><p id="pro_p" style="width: 100px;">0</p></td>
                                <td><p id="pro_g" style="width: 100px;">0</p></td>
                            </tr>  
                        </table>

                        <script>
                            $("#p_hco, #p_lip, #p_pro").on("input", function(){
                                /* porcentaje de kcal para hco, lipidos y proteinas */
                                $("#hco_p").text(((($("#p_hco").val())/100)*($("#kcal").text())).toFixed(2));
                                $("#lip_p").text(((($("#p_lip").val())/100)*($("#kcal").text())).toFixed(2));
                                $("#pro_p").text(((($("#p_pro").val())/100)*($("#kcal").text())).toFixed(2));

                                /* lo mismo pero en gramos */
                                var hco_g = (((($("#p_hco").val())/100)*($("#kcal").text()))/4).toFixed(2);
                                var lip_g = (((($("#p_lip").val())/100)*($("#kcal").text()))/9).toFixed(2);
                                var pro_g = (((($("#p_pro").val())/100)*($("#kcal").text()))/4).toFixed(2);

                                $("#hco_g").text(hco_g);
                                $("#lip_g").text(lip_g);
                                $("#pro_g").text(pro_g);
                            });

                            //datos post
                            var peso = $("#peso").val();
                            var estatura = $("#es").val();
                            var imc = $("#imc").text();
                            var grasa = $("#grasa").text();
                            var mm = $("#masa").text();
                            var kcal = $("#kcal").text();

                            //id paciente
                            var url = window.location+'';
                            var url_split = url.split("=");
                            var id = url_split[1];
                            //id paciente
                            //datos post


                            //Objeto con los data
                            var data = {
                                "peso" : peso,
                                "estatura" : estatura,
                                "imc" : imc,
                                "grasa" : grasa,
                                "mm" : mm,
                                "kcal" : kcal,
                                "id" : id,

                                //creo que estas hay que sacarlas de la funcion
                                "pro" : pro_g,
                                "lip" : lip_g,
                                "hco" : hco_g
                            }


                            // POST QUE GUARDA LOS DATOS DE LA CONSULTA
                            // peso, estaura, imc, grasa, masa_mus, kcal, pro, lip, hco, id_paciente
                            function consulta(){
                                var i = document.getElementById("kcal").innerHTML;
                                $.ajax({
                                    type: "POST",
                                    url: "pruebas.php",
                                    data: {'param1' : 34},
                                    success: function(respuesta){
                                        //$("#respuesta").text(respuesta);
                                        console.log(respuesta);
                                    }
                                });  
                            }
                            // POST QUE GUARDA LOS DATOS DE LA CONSULTA

                        </script>

                        <!------------------------ PORCENTAJES ------------------------->
                    </div>
                    <input type="submit" onclick="consulta()">
                    <p id="respuesta">jhbjhg</p>
                </div>
            </div>
        </div>
        <!------------------------ CALCULOS ANTROPOMETRICOS (DERECHA) ------------------------->
    <!--</div>-->

</body>
</html>
