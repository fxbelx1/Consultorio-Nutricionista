<?php
    require 'Conexion.php'; 
    session_start();

    $usuario = $_POST['id_nutriologa'];
    $contrasena = $_POST['pass_nutriologa'];

<<<<<<< HEAD
    $query = mysqli_query($conexion, "SELECT * FROM nutrióloga WHERE Usuario = '$usuario' and Contraseña = '$contrasena' ");
    $nr = mysqli_num_rows($query);

   if($nr == 1){
        $_SESSION['nutrióloga'] = $usuario;
=======
    $query = mysqli_query($conexion, "SELECT * FROM nutrióloga WHERE Usuario = '$usuario' AND Contraseña = '$contrasena'");
    $nr = mysqli_num_rows($query);

<<<<<<< HEAD
    if($nr == 1){
        $_SESSION['ola'] = $usuario;
        header("location: lista_pacientes.php");
=======
    if 

   /* if($nr == 1){
        $_SESSION['username'] = $usuario;
>>>>>>> 33680355cfc6d889e5d75eaab72f730d87bc14e9
        header("Location: lista_pacientes.php");
>>>>>>> a1b4ae153803bc649cb35bf168dc787b43f44b98
    }
    else if($nr == 0){
        header("Location: login.php");
<<<<<<< HEAD
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
=======
>>>>>>> a1b4ae153803bc649cb35bf168dc787b43f44b98
    }*/
?>