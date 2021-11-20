<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "nutrisystem";

    $conexion = new mysqli($server,$user,$pass,$db);

    if($conexion->connect_errno){
        die("La conexion ha fallado debido a un error de credenciales de usuario, ya sea 'user' o 'pass'". $conexion->connect_errno);
    }
?>