<!-- Login -->
<?php 
    include_once '../Complementos/ComprobarSession.php';  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Links CSS BootStrap-->
    <link rel="stylesheet" href="../css/Aspectos.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/lity.css">
    <link rel="shortcut icon" href="../img/Otras/logo_perris.png"/>
    <title>Bienvenido a MisPerris</title>
</head>

<body>
    <!-- JavaScript BootStrap-->
    <script src="../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/lity.js"></script>
    
    <?php include_once('../Complementos/Menu.php'); ?>

    <!-- Carrousel -->
    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block w-100" style="height: 550px;" src="../img/adoptados/Apolo.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" style="height: 550px;" src="../img/adoptados/Duque.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" style="height: 550px;" src="../img/adoptados/Tom.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Redes Sociales e Informacion-->
    <center>
        <div class="container-fluid" style="background-color:rgb(46, 198, 147)">
            <div class="row">
                <div class="col">
                    <h6 class="card-text text-white">+56 9 98765431</h6>
                </div>
                <div class="col">
                    <h6 class="card-text text-white">Rescate y adopción de perros callejeros</h6>
                </div>
                <div class="col">
                    <a href="https://www.google.com/gmail/" target="_blank"><img style="padding-left: 4px;height: 30px;" src="../img/Otras/gmail-logo.png" alt=""></a>
                    <a href="https://es-la.facebook.com/" target="_blank"><img style="padding-left: 10px; height: 25px;" src="../img/Otras/Facebook.png" alt=""></a>
                    <a href="https://www.instagram.com/?hl=es-la" target="_blank"><img style="padding-left: 10px; height: 25px;" src="../img/Otras/instagram-logo.png" alt=""></a>
                    <a href="https://plus.google.com/?hl=es" target="_blank"><img style="padding-left: 10px; height: 25px;" src="../img/Otras/google-plus-logo.png" alt=""></a>
                </div>
            </div>

        </div>
    </center>
    <!-- Textos con Imagenes (Contenedores) -->
    <div class="card-group">
        <div class="card">
            <div class="card-header text-right">
                <div class="card-body">
                    <h1 style="position: relative; left: 10px"><span class="badge text-secondary">Rescate</span></h1>
                    <h4 style="position: relative; top: -15px; left: 5px;"><span class="badge text-secondary">Etapa Uno</span></h4>
                    <h6 class="card-text"><span class="badge text-secondary"></span>Rescatamos Perros en situación de Peligro y/o Abandono. Los rehabilitamos y los preparamos para Buscarles un Hogar</h6>
                    <img class="img-thumbnail" width="59%" src="../img/Otras/rescate.jpg " alt=" ">
                </div>
            </div>
        </div>
        <div class=" card ">
            <div class="card-header ">
                <div class="card-body ">
                    <h1 style="position: relative; right: 15px; "><span class="badge text-secondary ">Crowdfunding</span></h1>
                    <h4 style="position: relative; top: -15px; right: 7px; "><span class="badge text-secondary ">Financiamiento</span></h4>
                    <h6 class="card-text "><span class="badge text-secondary "></span>Sigue nuestras Redes Sociales para informarte acerca de las Diversas Campañas y Actividades que realizaremos para Obtener Financiamiento para seguir ayudando</h6>
                    <img class="img-thumbnail " width="33% " src="../img/Otras/crowfunding.jpg " alt=" ">
                </div>
                <!-- Boton Campañas-->
                <button type="button " class="btn btn-light " style="border-color: black;position: relative; left: 3%; ">Campañas</button>
            </div>
        </div>
    </div>
    <!-- Galeria -->
    <center>
        <div class="gallery" style="background-color: rgb(111, 198, 169)">
            <div class="container">
                <h1 class="text-light">Fotos de Nuestros Perris</h1>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <a href=""><img src="../img/rescatados/Pexel.jpg" width="15.2%" data-lity class="img-thumbnail" alt=""></a>
                        <a href=""><img src="../img/rescatados/Oso.jpg" width="28%" data-lity class="img-thumbnail" alt=""></a>
                        <a href=""><img src="../img/rescatados/Bigotes.jpg" width="17.6%" data-lity class="img-thumbnail" alt=""></a>
                        <a href=""><img src="../img/rescatados/Chocolate.jpg" width="14.5%" data-lity class="img-thumbnail" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="gallery" style="background-color:  rgb(111, 198, 169)">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <a href=""><img src="../img/rescatados/Maya.jpg" width="25.5%" data-lity class="img-thumbnail" alt=""></a>
                        <a href=""><img src="../img/rescatados/Wifi.jpg" width="25%" data-lity class="img-thumbnail" alt=""></a>
                        <a href=""><img src="../img/rescatados/Luna.jpg" width="25%" data-lity class="img-thumbnail" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </center>


</body>

</html>