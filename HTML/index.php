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
        <title>Consultorio Nutricional</title>
        <link rel="stylesheet" href="../CSS/index_diseño.css">

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
                <li><a href="#">Inicio</a></li>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#contacto">Contacto</a></li>
                <li><a class="isesio" href="../HTML/login.php"><button>Iniciar sesión</button></a></li>
            </ul>
        </nav> 
    </header>
    <!------------------------ HEADER ------------------------->


    <!------------------------ INICIO ------------------------->
    <div class="inicio">
        <div class="iz">
            <div class="iz_imagen"><img src="../IMAGENES/brooke-lark-jUPOXXRNdcA-unsplash (2).jpg" alt="Imagen de comida"></div>
        </div>
                
        <div class="der">
            <h1>Cuando comes bien te sientes bien</h1>
            <p>Tu que requieres de sentirte bien saludablemente, ven y encuentra esa forma con nosotros.</p>
            <a class="a_simple" href="#servicios">Conoce nuestros servicios </a> <!--a_simple-->
        </div>  
    </div>
    <!------------------------ INICIO ------------------------->


    <!------------------------ SERVICIOS ------------------------->
    <div class="servicios">
        <div class="hiper">
            <a id="servicios">texto a</a>
        </div>

        <div class="cont_servicios">
            <div class="ser1">
                <div>
                    <img src="../IMAGENES/ico_peso.png">
                    <h1>Control del peso</h1>
                    <p>Alcanzar un peso saludable puede ayudarlo a controlar el colesterol, la presión arterial y el azúcar en la sangre.</p>
                </div>
            </div>
    
            <div class="ser2">
                <div>
                    <img src="../IMAGENES/ico_salud.png">
                    <h1>Control de enfermedades</h1>
                    <p>Evita todo tipo de enfermedades que tengan que ver con la obesidad.</p>
                </div>
            </div>
    
            <div class="ser3">
                <div>
                    <img src="../IMAGENES/ico_vida.png">
                    <h1>Estilo de vida saludable</h1>
                    <p>Obten consejos para una vida saludable y energetica.</p>
                </div>
            </div>
        </div>

        <p>Para mas información puede comunicarse con nosotros</p>
        <a class="isesion" href="#contacto"><button>Contacto</button></a>
    </div>
    <!------------------------ SERVICIOS ------------------------->


    <!------------------------ CONTACTO ------------------------->
    <div class="contacto">
        <div class="hiper">
            <a id="contacto" style="color: black;">texto a</a>
        </div>

        <div class="titulo">
            <h1>Contacto</h1>
            <p>Si desea mas información o agendar una cita puede comunicarse a través de los siguientes medios: </p>
        </div>

        <div class="tel_correo">
            <div class="tel">
                <div class="cont">
                    <h1>Teléfono o Whatsapp</h1>
                    <img src="../IMAGENES/wp.png">
                    <p>8147309865</p>
                </div>
            </div>
    
            <div class="correo">
                <div class="cont">
                    <h1>Correo</h1>
                    <img src="../IMAGENES/correo.png">
                    <p>Cameron.coats2606@gmail.com</p>
                </div>
            </div>

            <div class="correo">
                <div class="cont">
                    <h1>Instagram</h1>
                    <img src="../IMAGENES/insta.png">
                    <p>Cameron.Coats</p>
                </div>
            </div>
        </div>     
    </div>
    <!------------------------ CONTACTO ------------------------->
</body>
</html>