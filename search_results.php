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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
		var data = [];
        $.getJSON("https://api.mercadolibre.com/sites/MLM/search?q=<?php echo $_SESSION['game']; ?>&limit=12", function(result){
            	for (var i = 0; i < result.results.length; i ++) {
                	data[i] = result.results[i];
                }
                var k = 0;
                for (i = 0; i < result.results.length; i ++) {
                    if ((i) % 4 == 0) {
                        k += 1;
                        $('#meli').append('</div><br><br><div class="card-deck" id="'+k+'">');
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
            <a class="navbar-brand" href="index.php"> <img class="img-fluid" src="assets/img/icon.png" style="height:23px;"></a>
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
    
    <div class="container" id="promos" style="padding-top: 56px;">
    <script>
        function send(){
            $.ajax({
                method: "post",
                url:"solicitud.php",
                data:$("#search").serialize(),
                success:function(resp){
                        window.location.assign("eBay_API_Test.php")
                }
            });
        }
        // Parse the response and build an HTML table to display search results
        function _cb_findItemsByKeywords(root) {
            var items = root.findItemsByKeywordsResponse[0].searchResult[0].item || [];
            var data = root.findItemsByKeywordsResponse[0].searchResult[0].item || [];
            var html = [];
            html.push('<div class="card-deck">');
            for (var i = 0; i < items.length; ++i) {
                var item     = items[i];
                var title    = item.title;
                var price    = data[i].sellingStatus[0].currentPrice[0].__value__*18;
                var pic      = item.galleryURL;
                var viewitem = item.viewItemURL;
                if ((i) % 4 == 0) {
                    html.push('</div><br><br><div class="card-deck">');
                }
                html.push('<div class="card"><br><img class="card-img mx-auto d-block" src="'+pic+'" alt="Card image cap" style="margin-left: 35%; width: 40%; height: 25%;" alingn="center"><div class="card-body"><ul class="list-group list-group-flush"><li class="list-group-item"><img src="https://upload.wikimedia.org/wikipedia/commons/4/48/EBay_logo.png" style="width: 70px;"></li></ul><p class="card-text">'+title+'</p></div><ul class="list-group list-group-flush"><li class="list-group-item text-center" style="background-color: #a31915; color: #fff; font-size: 20px;">$'+price.toFixed(2)+' MXN.</li></ul><div class="card-footer"><a class="btn btn-outline-dark my-2 my-sm-0" href="'+viewitem+'" role="button">Ver</a></div></div>');
            }
            document.getElementById("promos").innerHTML = html.join("");
        }  // End _cb_findItemsByKeywords() function

// Create a JavaScript array of the item filters you want to use in your request
        var filterarray = [
            {"name":"MinPrice", 
            "value":"0", 
            "paramName":"Currency", 
            "paramValue":"USD"},
            {"name":"FreeShippingOnly", 
            "value":"false", 
            "paramName":"", 
            "paramValue":""},
            {"name":"ListingType", 
            "value":["AuctionWithBIN", "FixedPrice", "StoreInventory"], 
            "paramName":"", 
            "paramValue":""},
        ];


// Define global variable for the URL filter
var urlfilter = [];

// Generates an indexed URL snippet from the array of item filters
function  buildURLArray() {
  // Iterate through each filter in the array
  for(var i=0; i<filterarray.length; i++) {
    //Index each item filter in filterarray
    var itemfilter = filterarray[i];
    // Iterate through each parameter in each item filter
    for(var index in itemfilter) {
      // Check to see if the paramter has a value (some don't)
      if (itemfilter[index] !== "") {
        if (itemfilter[index] instanceof Array) {
          for(var r=0; r<itemfilter[index].length; r++) {
          var value = itemfilter[index][r];
          urlfilter += "&itemFilter\(" + i + "\)." + index + "\(" + r + "\)=" + value ;
          }
        } 
        else {
          urlfilter += "&itemFilter\(" + i + "\)." + index + "=" + itemfilter[index];
        }
      }
    }
  }
}  // End buildURLArray() function

// Execute the function to build the URL filter
buildURLArray(filterarray);

// Construct the request
// Replace MyAppID with your Production AppID
var url = "http://svcs.ebay.com/services/search/FindingService/v1";
    url += "?OPERATION-NAME=findItemsByKeywords";
    url += "&SERVICE-VERSION=1.0.0";
    url += "&SECURITY-APPNAME=SalEmman-ComparaG-PRD-85d8a3c47-83c605ac";
    url += "&GLOBAL-ID=EBAY-US";
    url += "&RESPONSE-DATA-FORMAT=JSON";
    url += "&callback=_cb_findItemsByKeywords";
    url += "&REST-PAYLOAD";
    url += "&keywords=<?php echo $_SESSION['game']; ?>";
    url += "&paginationInput.entriesPerPage=12";
    url += urlfilter;


// Submit the request 
s=document.createElement('script'); // create script element
s.src= url;
document.body.appendChild(s);

// Display the request as a clickable link for testing
//document.write("<a href=\"" + url + "\">" + url + "</a>");

</script>
    </div>
    <div class="container" id="meli" style="padding-bottom: 56px;"></div>
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