<?php 
    // Variables que vienen por formulario
    $nombre = $_POST['nombre'];
    $mensaje = $_POST['mensaje'];
    $email = $_POST['email'];

    // Variables definidas por nosotros
    $asunto = "Mensaje desde la Web";
    $destino = "maty_032@hotmail.es"; // email al que llegarán nuestros mensajes

    // Cuerpo del email
    $contacto = "
        Nombre: $nombre <br>
        Email: $email <br>
        Mensaje de la Web: $mensaje <br>
    ";

    // Proceso del envío:
    $headers="MIME-Version: 1.0" . "\r\n";
    $headers.="Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers.='From: '. $email . "\r\n";
    
    $mail = mail($destino, $asunto, $contacto, $headers);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matias Diaz - Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Grandstander:wght@500&family=Roboto:wght@500&display=swap" rel="stylesheet">
</head>
<body class="body">
 
<header>
        <!-- barra de navegacion -->
        <div class="container-fluid fixed-top navbar-inverse barra">
            <nav class="navbar navbar-expand-lg container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                  <img src="img/iconfinder__computer_2324281.svg" class="icono">
                  <a class="navbar-brand mr-auto" href="#">Matias Diaz</a>
                  <ul class="navbar-nav mt-2 mt-lg-0">
                    <li class="nav-item">
                      <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#sobre-mi">Sobre Mi</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#proyectos">Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Contactame</a>
                      </li>
                  </ul>
                </div>
              </nav>
        </div>

    </header>

    <main class="container-fluid">     
      
      <h2>Su mensaje ha sido enviado con exito!</h2>

      <a href="index.html">Volver a inicio</a>

    </main>

    <footer class="container-fluid">
       <div class="row justify-content-around align-items-center">
          <div class="social-media col-5">
          <a href="https://www.facebook.com/maty.diaz1"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.instagram.com/matidiaz032/?hl=es-la"><i class="fab fa-instagram"></i></a>
          <a href="https://www.linkedin.com/in/matias-diaz/"><i class="fab fa-linkedin-in"></i></a>
          <a href="https://github.com/matidiaz032"><i class="fab fa-github"></i></a>
          </div>
          <div class="descripcion col-5">
             <strong>Sitio web diseñado y construido por Matias Diaz® 2020</strong>
          </div>
      </div>   
  </footer>

    <script src="js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/4baeadfaf1.js" crossorigin="anonymous"></script>

</body>
</html>