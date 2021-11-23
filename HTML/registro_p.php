<?php
include("Conexion.php"); 

if(strlen($_POST['nombre']) >= 1 &&
    strlen($_POST['ap_p']) >= 1 &&
    strlen($_POST['ap_m']) >= 1 &&
    strlen($_POST['edad']) >= 1 &&
    strlen($_POST['sexo']) >= 1 &&
    strlen($_POST['nac_dia']) >= 1 &&
    strlen($_POST['nac_mes']) >= 1 &&
    strlen($_POST['nac_año']) >= 1 &&
    strlen($_POST['tel']) >= 1 &&
    strlen($_POST['correo']) >= 1 &&
    strlen($_POST['enfermedades']) >= 1 &&
    strlen($_POST['alergias']) >= 1 &&
    strlen($_POST['disgustos']) >= 1 &&
    strlen($_POST['act_fisica']) >= 1 &&
    strlen($_POST['tabaco']) >= 1 &&
    strlen($_POST['al']) >= 1
){
    $nombre = $_POST['nombre'];
    $ap_p = $_POST['ap_p'];
    $ap_m = $_POST['ap_m'];
    $edad = $_POST['edad'];
    $sexo = $_POST['sexo'];
    $nac_dia = $_POST['nac_dia'];
    $nac_mes = $_POST['nac_mes'];
    $nac_año = $_POST['nac_año'];
    $tel = $_POST['tel'];
    $correo = $_POST['correo'];
    $enfermedades = $_POST['enfermedades'];
    $alergias = $_POST['alergias'];
    $disgustos = $_POST['disgustos'];
    $act_fisica = $_POST['act_fisica'];
    $tabaco = $_POST['tabaco'];
    $al = $_POST['al'];


    
    $consulta = "INSERT INTO info_paciente(Nombre, Apellido_P, Apellido_M, Edad, Sexo, Dia, Mes, Año, Telefono, Correo, Enfermedades, Alergias, Disgustos, Act_Fisica, Tabaco, Alcohol)
    VALUES ('$nombre', '$ap_p', '$ap_m','$edad', '$sexo', '$nac_dia', '$nac_mes', '$nac_año', '$tel', '$correo', '$enfermedades','$alergias', '$disgustos', '$act_fisica', '$tabaco', '$al')";

    $resultado = mysqli_query($conexion, $consulta);
}

header("Location: consulta_paciente.php");

   /*if(isset($_POST['registrar'])){
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
    }*/
?>