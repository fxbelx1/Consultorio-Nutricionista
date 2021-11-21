<?php
    require 'Conexion.php'; 
    session_start();

    $usuario = $_POST['id_nutriologa'];
    $contrasena = $_POST['pass_nutriologa'];

    $query = mysqli_query($conexion, "SELECT * FROM Nutriologa WHERE Usuario = '$usuario' and Contraseña = '$contrasena' ");
    $nr = mysqli_num_rows($query);

    if 

   /* if($nr == 1){
        $_SESSION['username'] = $usuario;
        header("Location: lista_pacientes.php");
    }
    else if($nr == 0) {
        header("Location: login.php");
    }*/
?>