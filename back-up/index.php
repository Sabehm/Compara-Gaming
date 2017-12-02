<!DOCTYPE html>
<?php session_start(); ?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compara Gaming</title>
    <link rel="shortcut icon" href="assets/img/favicon.png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arimo">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <link rel="stylesheet" href="assets/bootstrap-social-gh-pages/bootstrap-social.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-md fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html"> <img class="img-fluid" src="assets/img/icon.png" style="height:23px;"></a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#" id="alertaa">Inicio </a></li>
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
                    ?>; 
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
    <div class="carousel slide" data-ride="carousel" id="carousel-1" style="height:auto;margin-top:56px;">
        <div class="carousel-inner" role="listbox" style="height:auto;">
            <div class="carousel-item active" style="height:auto;"><img class="d-block w-100" src="assets/img/cuphead.jpg" alt="Slide Image" style="height:auto;width:auto;"></div>
            <div class="carousel-item"><img class="d-block w-100" src="assets/img/gears-of-war.jpg" alt="Slide Image" style="height:auto;width:auto;"></div>
            <div class="carousel-item"><img class="d-block w-100" src="assets/img/resident-evil-6.jpg" alt="Slide Image" style="height:auto;width:auto;"></div>
        </div>
        <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a>
            <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a>
        </div>
        <ol class="carousel-indicators">
            <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-1" data-slide-to="1"></li>
            <li data-target="#carousel-1" data-slide-to="2"></li>
        </ol>
    </div>
    <div class="highlight-blue" style="margin-top:35px;">
        <div class="container">
            <div class="intro">
                <h5 class="text-center"><strong>Para muchos de nosotros los video juegos no sólo son un pasatiempo, son un estilo de vida</strong></h5></div>
        </div>
    </div>
    <div class="article-clean">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                    <div class="intro"></div>
                    <div class="text">
                        <p style="font-family:Arimo, sans-serif;">Parrafito 1 :v</p>
                        <p style="font-family:Arimo, sans-serif;">Parrafito 2 :v</p>
                        <h2 style="font-family:Arimo, sans-serif;">Un título ewe</h2>
                        <p style="font-family:Arimo, sans-serif;">Otro pinshi párrafo </p>
                        <figure><img class="figure-img" src="https://cdnb.20m.es/videojuegos/files/videoclub.jpg">
                            <figcaption style="font-family:Arimo, sans-serif;">Es necesario poner algo así como Fig. 1.1??????</figcaption>
                        </figure>
                        <p style="font-family:Arimo, sans-serif;">Amm otro párrafo</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">¡Estás de vuelta!</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" id="f-login">
                        <h2 class="sr-only">Login Form</h2>
                        <div class="illustration" style="text-align: center;">
                            <a class="btn btn-block btn-social btn-facebook" style="color: #fff;">
                                <span class="fa fa-facebook" style="color: #fff; padding-top: 3px;"></span>  Iniciar con Facebook
                            </a>
                            <a class="btn btn-block btn-social btn-twitter" style="color: #fff;">
                                <span class="fa fa-twitter" style="color: #fff; padding-top: 3px;"></span>  Iniciar con Twitter
                            </a>
                            <a class="btn btn-block btn-social btn-google" style="color: #fff;">
                                <span class="fa fa-google" style="color: #fff; padding-top: 1px;"></span>  Iniciar con Google
                            </a>
                            <i class="icon ion-ios-game-controller-b" style="color: #ffc107; text-align: center; font-size: 100px;"></i>
                        </div>
                        
                        <div class="form-group">
                            <input type="email" name="email" placeholder="E-mail" class="form-control" />
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Contraseña" class="form-control" />
                        </div>
                        <div class="form-group">
                            <button class="btn btn-outline-warning btn-block" type="submit">Iniciar</button>
                        </div>
                        <a href="#" class="sign up" id="a-sign-up" style="float: left; color: #6f7a85;">!Regístrate¡</a>
                        <a href="#" class="forgot" style="float: right; color: #6f7a85;">¿Olvidaste tu contraseña?</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- fin modal -->
    <!-- Modal -->
    <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">¡Regístrate!</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-container">
                        <form method="post" id="f-signup" style="text-align: center;">
                            <h2 class="text-center"> <i class="icon ion-ios-game-controller-a" style="font-size: 100px; color: #ffc107"></i></h2>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" name="name" placeholder="Nombre" class="form-control" />
                                </div>
                                <div class="col">
                                    <input type="text" name="firstn" placeholder="Apellido Paterno" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group"></div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col">
                                        <input type="text" name="surn" placeholder="Apellido Materno" class="form-control" />
                                    </div>
                                    <div class="col"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="E-mail" />
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" placeholder="Contraseña" class="form-control" />
                            </div>
                            <div class="form-group">
                                <input type="password" name="password-repeat" placeholder="Contraseña (repetir)" class="form-control" />
                            </div>
                            <div class="form-group" style="float: left;">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" />Acepto los términos y condiciones.</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-outline-warning btn-block" type="submit">!Registrarme¡ </button>
                            </div><a id="a-login" href="#" class="already" style="color: #6f7a85;">¿Ya tienes una cuenta? Inicia sesión.</a>
                            <button class="btn btn-light btn-sm float-right" type="button"></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fin modal -->
    <!-- Alertas -->
    <div class="alert alert-success collapse fixed-top" id="myAlert" style="width: 80%; margin: auto; margin-top: 0.5%;">
        <a id="linkClose" href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>¡Genial!</strong>-Se ha iniciado sesión correctamente
    </div>
    <div class="alert alert-danger collapse fixed-top" id="myAlert2" style="width: 80%; margin: auto; margin-top: 0.5%;">
        <a id="linkClose2" href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>¡Ups!</strong>-Tus datos son incorrectos
    </div>
    <div class="alert alert-success collapse fixed-top" id="altsuccsignup" style="width: 80%; margin: auto; margin-top: 0.5%;" role="alert">
        <h4 class="alert-heading">¡Genial!</h4>
        <p>Ahora eres parte de la comunidad de Comp<span style="text-decoration: line-through;">a</span>ra Gaming©.</p>
    </div>
    <div class="alert alert-danger collapse fixed-top" id="altfailsignup" style="width: 80%; margin: auto; margin-top: 0.5%;" role="alert">
        <h4 class="alert-heading">¡Ups!</h4>
        <p>Parece que ya existe una cuenta asociada a este correo</p>
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
                            <li><a href="team.html">Team</a></li>
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
    <script src="https://use.fontawesome.com/c2f90156ad.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        $(document).ready(function () {
            var session = <?php  
                            if(isset($_SESSION['user'])):
                                echo 1;
                            else:
                                echo 0;
                            endif;
                          ?>;
            if(session == 0) {
                $('#login').modal('show');
            }
        });
        $(function () {
            $('#a-sign-up').click(function(e) {
                e.preventDefault();
                $('#login').modal('hide');
                $('#signupModal').modal('show');
            });
        });
        $(function () {
            $('#a-login').click(function(e) {
                e.preventDefault();
                $('#signupModal').modal('hide');
                $('#login').modal('show');
            });
        });
        $(function () {
            $('#start-session').click(function(e) {
                e.preventDefault();
                $('#signupModal').modal('hide');
                $('#login').modal('show');
            });
        });
    </script>
</body>

</html>