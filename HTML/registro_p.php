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

$sql = "SELECT Id FROM info_paciente WHERE Nombre = '$nombre'";
$dato = mysqli_query($conexion,$sql);
$mostrar = mysqli_fetch_array($dato);
$id_us = $mostrar['Id'];

header("Location: consulta_paciente.php?prueba=$id_us");
?>