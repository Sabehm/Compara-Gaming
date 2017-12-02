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
                html.push('<div class="card" style="heigth: 20em;"><br><img class="card-img-toprounded mx-auto d-block" src="'+pic+'" alt="Card image cap" style="margin-left: 35%; width: 45%; height: 15%;" alingn="center"><div class="card-body"><ul class="list-group list-group-flush"><li class="list-group-item"><img src="https://upload.wikimedia.org/wikipedia/commons/4/48/EBay_logo.png" style="width: 70px;"></li></ul><p class="card-text">'+title+'</p></div><div class="card-footer"><a class="btn btn-outline-dark my-2 my-sm-0" href="'+viewitem+'" role="button">Ver</a></div></div>');
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
            "value":"true", 
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
    url += "&paginationInput.entriesPerPage=102";
    url += urlfilter;


// Submit the request 
s=document.createElement('script'); // create script element
s.src= url;
document.body.appendChild(s);