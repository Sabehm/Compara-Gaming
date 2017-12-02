<!DOCTYPE html>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
		var data = [];
        $.getJSON("https://api.mercadolibre.com/sites/MLM/search?q=god%20of%20war&limit=12", function(result){
            	for (var i = 0; i < result.results.length; i ++) {
                	data[i] = result.results[i];
                }
                var k = 0;
                var aux = 0;
                for (i = 0; i < result.results.length; i ++) {
                    if ((i) % 4 == 0) {
                        aux += 1;
                        k = aux;
                        $('#meli').append('</div><br><br><div class="card-deck" id="'+k+'">');
                        //k += 1;
                    }
                    $('#'+k+'').append('<div class="card"><br><img class="card-img mx-auto d-block" src="'+data[i].thumbnail+'" alt="Card image cap" style="margin-left: 35%; width: 40%; height: 25%;" alingn="center"><div class="card-body"><ul class="list-group list-group-flush"><li class="list-group-item"><img src="https://newrelic.cdn.prismic.io/newrelic/972eb862e5d3a50e4f7c525b931458e89d292835_casestudy_mercadolibre_logo.png" style="width: 70px;"></li></ul><p class="card-text">'+data[i].title+'</p></div><ul class="list-group list-group-flush"><li class="list-group-item text-center" style="background-color: #a31915; color: #fff; font-size: 20px;">$'+data[i].price+' MXN.</li></ul><div class="card-footer"><a class="btn btn-outline-dark my-2 my-sm-0" href="'+data[i].permalink+'" role="button">Ver</a></div></div>');
                    
                }	
        });
});
</script>
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
    <div class="container" id="meli" style="padding-top: 56px; padding-bottom: 55px;"></div>
</body>
</html>