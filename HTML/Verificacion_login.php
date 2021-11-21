<?php
    require 'Conexion.php'; 
    session_start();

    $usuario = $_POST['id_nutriologa'];
    $contrasena = $_POST['pass_nutriologa'];

    $query = mysqli_query($conexion, "SELECT * FROM nutrióloga WHERE Usuario = '$usuario' AND Contraseña = '$contrasena'");
    $nr = mysqli_num_rows($query);

    if($nr == 1){
        $_SESSION['ola'] = $usuario;
        header("location: lista_pacientes.php");
    }
    else if($nr == 0){
        header("Location: login.php");
    }

    /*$sql = mysqli_query($conexion, "SELECT * FROM Nutriologa WHERE Usuario = '$usuario' and Contraseña = '$contrasena'");
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($result);


    if($count == 1){
        session_register("usuario");
        $_SESSION['login_user'] = $usuario;
        header("location: lista_pacientes.php");
    }
    else if($count == 0) {
        header("Location: login.php");
    }*/
?>