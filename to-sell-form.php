<!DOCTYPE html>
<?php 
    session_start();
	if(isset($_FILES["file"])){

		$directorio = "assets/img/videogames/";

		//Asignar nombre dinamicamente. Primero recupero la extensión del archivo
		$tmp = explode(".", $_FILES["file"]["name"]);
		$extensionArchivo = end($tmp);
		$idArchivo = uniqid();
		$nombreArchivo = $_SESSION['user'].$idArchivo.".".$extensionArchivo;
        
				
		$rutaArchivo = $directorio.$nombreArchivo;
		if(move_uploaded_file($_FILES["file"]["tmp_name"], $rutaArchivo)){
			echo $extensionArchivo;
		} else {
			echo 0;
		}
    }
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="assets/dropzone/min/dropzone.min.css">
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
    <div class="register-photo" style="padding-bottom:40px;padding-top:90px;">
        <div class="form-container">
            <form method="post" id="to-sell-form">
                <div class="form-group d-table">
                    <div class="form-row">
                        <div class="col">
                            <input class="form-control" type="text" name="title" required="" placeholder="Título" style="margin: 10px;">
                        </div>
                    </div>
                </div>
                <div class="form-group d-table">
                    <div class="form-row">
                        <div class="col d-flex">
                            <label class="col-form-label">$: </label>
                            <input type="text" name="price" required placeholder="Precio" pattern="[0-9]+.*[0-9]*" class="form-control"/>
                            <label class="col-form-label">MXN. </label>
                        </div>
                    </div>
                </div>
                <div class="form-group d-table">
                    <label>Estado o condición:</label>
                    <select class="form-control" name="status">
                        <optgroup label="Elige una">
                            <option value="Nuevo" selected="">Nuevo</option>
                            <option value="Usado">Usado</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group d-table">
                    <label>Plataforma </label>
                    <select class="form-control" name="platform">
                        <optgroup label="Elige una">
                            <option value="Play-Station" selected="">Play-Station</option>
                            <option value="X-BOX">X-BOX</option>
                            <option value="Wii">Wii</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group">
                    <label>Añade una breve descripción:</label>
                    <textarea class="form-control" placeholder="Descripción" maxlength="45" minlength="45" name="description"></textarea>
                </div>
                <div class="form-group">
                    <label>¡Sube una foto del producto! </label>
                    <div id="myDropZone" class="dropzone"></div>
                </div>
                <div class="form-group float-right">
                    <button class="btn btn-outline-warning btn-block" type="submit">¡Subir! </button>
                </div>
            </form>
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
    <script language="javascript" type="text/javascript" src="assets/dropzone/min/dropzone.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
<script>
    var cleanFilename = function (name) {
        return "image.jpeg";
    };
	var flag=0;
	var myDropzone;
    Dropzone.autoDiscover = false;
	$(document).ready(function(e) {
        myDropzone = new Dropzone("#myDropZone", { 
            url: "to-sell-form.php",
			autoProcessQueue:false,	
			dictDefaultMessage:"Arrastra la imagen aquí o da click",
			dictFallbackMessage:"Tu navegador no soporta el modo drag'n'drop",
			acceptedFiles:"image/jpeg,image/png,image/jpg",
			maxFiles:1,
			init:function(){
				this.on("drop",function(file){
					flag=1;
				});
				this.on("addedfile",function(file){
					flag=1;
				});
				this.on("success",function(file,resp){
					cleanFilename= function (name) {
  					 return $("").val()+"."+resp;
					};
				});
			},
			renameFilename:cleanFilename
		});	
    });
</script>
</html>