<?php
   include("Conexion.php"); 

   if(isset($_POST['registrar'])){
        if(strlen($_POST['user_name']) >= 1 && strlen($_POST['user_Ap_Paterno']) >= 1 && strlen($_POST['user_Ap_Materno']) >= 1 && strlen($_POST['user_Ager']) >= 1 && strlen($_POST['user_Sexo']) >= 1 
        && strlen($_POST['user_day']) >= 1 && strlen($_POST['user_Mes']) >= 1 && strlen($_POST['user_year']) >= 1 && strlen($_POST['user_Telefono']) >= 1 && strlen($_POST['user_mail']) >= 1 
        && strlen($_POST['user_enfermedades']) >= 1 && strlen($_POST['user_alergias']) >= 1 && strlen($_POST['user_Dalimenticios']) >= 1 
        && strlen($_POST['fav_language']) >= 1 && strlen($_POST['fav_language']) >= 1 && strlen($_POST['fav_language']) >= 1) { 
            $Nombre = trim($_POST['user_name']);
            $Apellido_P = trim($_POST['user_Ap_Paterno']);
            $Apellido_M = trim($_POST['user_Ap_Materno']);
            $Edad = trim($_POST['user_Age']);
            $Sexo = trim($_POST['user_Sexo']);
            $Dia = trim($_POST['user_day']);
            $Mes = trim($_POST['user_Mes']);
            $Año = trim($_POST['user_year']);
            $Telefono = trim($_POST['user_Telefono']);
            $Correo = trim($_POST['user_mail']);
            $Enfermedades = trim($_POST['user_enfermedades']);
            $Alergias = trim($_POST['user_alergias']);
            $Disgustos = trim($_POST['user_Dalimenticios']);
            $Act_Fisica = trim($_POST['fav_language']);
            $Tabaco = trim($_POST['fav_language']);
            $Alcohol = trim($_POST['fav_language']);

            $registro = "INSERT INTO info_paciente (id,Nombre, Apellido_P, Apellido_M, Edad, Sexo, Dia, Mes, Año, Telefono, Correo, Enfermedades, Alergias, Disgustos, Act_Fisica, Tabaco, Alcohol) 
                                    VALUES (0,'$Nombre','$Apellido_P','$Apellido_M','$Edad','$Sexo','$Dia','$Mes','$Año','$Telefono','$Correo','$Enfermedades','$Alergias','$Disgustos','$Act_Fisica','$Tabaco','$Alcohol')";

            $resultado = mysqli_query($Conexion,$registro);
        }
       header("Location: consulta_paciente.php");
    }
?>