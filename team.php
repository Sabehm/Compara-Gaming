<!DOCTYPE html>
<?php session_start(); ?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arimo">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-md fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"> <img class="img-fluid" src="assets/img/icon.png" style="height:23px;"></a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="index.php">Inicio </a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Blog </a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Conctacto </a></li>
                    <?php  
                        if(isset($_SESSION['user'])):
                            echo '<li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$_SESSION['user'].'</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="to-sell-form.php">Subir Juego</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" id="close-session" href="assets/mysql-php/session-des.php">Cerrar Sesión</a>
                                    </div>
                                  </li>';
                        else:
                            echo '<li class="nav-item" role="presentation"><a class="nav-link" href="#" id="start-session">Iniciar Sesión</a></li>';
                        endif;
                    ?> 
                </ul>
                <form class="form-inline" id="search" name="search">
                    <div class="form-group">
                        <input class="form-control form-control-sm" type="text" name="input" placeholder="Buscar..." id="input">
                        <button class="btn btn-outline-warning btn-sm" type="submit">Buscar </button>
                    </div>
                </form>
            </div>
        </div>
    </nav>
    <div class="team-clean" style="padding:56px;">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Team </h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
            </div>
            <div class="row justify-content-center align-items-center people">
                <div class="col-md-6 col-lg-4 item"><img class="rounded-circle" src="assets/img/antonio-delgado.jpg">
                    <h3 class="name">Antonio Delgado</h3>
                    <p class="title">Putito </p>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id. Etiam dictum feugiat tellus, a semper massa. </p>
                    <div class="social"><a href="https://www.facebook.com/Renshake"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                </div>
                <div class="col-md-6 col-lg-4 item"><img class="rounded-circle" src="assets/img/saul-emmanuel.jpg">
                    <h3 class="name">Saúl Emmanuel</h3>
                    <p class="title">:3 </p>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id. Etiam dictum feugiat tellus, a semper massa. </p>
                    <div class="social"><a href="https://www.facebook.com/saul.emmanuel.9"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-clean">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Servicios</h3>
                        <ul>
                            <li><a href="#">Compra y venta de video juegos</a></li>
                            <li><a href="#">Comparación de precios</a></li>
                            <li><a href="#">Blog </a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Compara Gaming</a></li>
                            <li><a href="team.php">Team</a></li>
                            <li><a href="#">Políticas de Servicio</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a>
                        <p class="copyright">Comp<span style="text-decoration: line-through;">a</span>ra Gaming© 2017</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>